<?php

namespace App\Http\Controllers;

use App\Jobs\MarketplaceJob;
use App\Jobs\ProductJob;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function uploadViaMarketplace(Request $request)
    {
        //VALIDASI INPUTAN
        $this->validate($request, [
            'marketplace' => 'required|string',
            'username' => 'required|string',
        ]);

        MarketplaceJob::dispatch($request->username, 10); //BUAT JOBS QUEUE

        //PARAMETER PERTAMA ADALAH USERNAME TOKO PADA MARKETPLACE
        //PARAMETER KEDUA ADALAH JUMLAH PRODUK YANG AKAN AMBIL DALAM SEKALI PROSES
        //SAYA SARANKAN MENGGUNAKAN VALUE 10 UNTUK MEMPERCEPAT PROSES
        return redirect()->back()->with(['success' => 'Produk Dalam Antrian']);
    }

    public function index()
    {
        $product = Product::with(['category'])->orderBy('created_at', 'DESC');

        if (request()->q != '') {
            $product = $product->whereAny(['name', 'price', 'slug'], 'LIKE', '%'.request()->q.'%');
        }
        $product = $product->paginate(10);

        return view('products.index', compact('product'));
    }

    public function create()
    {
        $category = Category::orderBy('name', 'DESC')->get();

        return view('products.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'image' => 'required|image|mimes:png,jpeg,jpg',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().Str::slug($request->name).'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);

            $product = Product::create([
                'name' => $request->name,
                'slug' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'image' => "public/products/" . $filename,
                'price' => $request->price,
                'weight' => $request->weight,
                'status' => $request->status,
            ]);

            return redirect(route('product.index'))->with(['success' => 'Produk Baru Ditambahkan']);
        }
    }

    public function show(string $id)
    {
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::orderBy('name', 'DESC')->get();

        return view('products.edit', compact('product', 'category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|integer',
            'weight' => 'required|integer',
            'image' => 'nullable|image|mimes:png,jpeg,jpg',
        ]);

        $product = Product::find($id);
        $filename = $product->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time().Str::slug($request->name).'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/products', $filename);
            Storage::delete($product->image);
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'weight' => $request->weight,
            'image' => "public/products/" . $filename,
        ]);

        return redirect(route('product.index'))->with(['success' => 'Data Produk Diperbaharui']);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::delete($product->image);
        $product->delete();

        return redirect(route('product.index'))->with(['success' => 'Produk Sudah Dihapus']);
    }

    public function massUploadForm()
    {
        $category = Category::orderBy('name', 'DESC')->get();

        return view('products.bulk-upload-form', compact('category'));
    }

    public function massUpload(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required|exists:categories,id',
            'file' => 'required|mimes:xlsx,xls',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time().'-product.'.$file->getClientOriginalExtension();
            $file->storeAs('public/uploads', $filename);

            ProductJob::dispatch($request->category_id, $filename);

            return redirect()->back()->with(['success' => 'Upload Produk Dijadwalkan']);
        }
    }
}
