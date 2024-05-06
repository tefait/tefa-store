<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Menampilkan seluruh produk
     * atau bila ada request query tampilkan produk sesuai dengan query tersebut
     * kemudian paginate
     *
     * @return view
     */
    public function index()
    {
        $produks = [];
        if (request('query') && request('query') !== null) {
            $query = request('query');
            $produks = Produk::where('name', 'like', '%'.$query.'%')->orWhere('price', 'like', '%'.$query.'%')->orWhere('description', 'like', '%'.$query.'%')->paginate(8);
        } else {
            $produks = Produk::paginate(8);
        }

        if (Auth::check() && Auth::user()->is_admin) {
            return view('development.produk.index', compact('produks'));
        }

        return view('development.produk.index_user', compact('produks'));

        // return view('development.bootstrap.produk.index', compact('produks'));
    }

    /**
     * Menampikan halaman buat produk baru untuk admin
     */
    public function create()
    {
        return view('development.produk.create');
    }

    /**
     * Menyimpan produk yang sudah dikirimkan dari halaman 'produk.create' ke databa
     */
    public function store(Request $request)
    {
        // Validasi apakah semua data sudah diisi
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|number',
            'stock' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);
        // Simpan file kedalam sebuah variabel
        $file = $request->file('image');
        // Buat nama file baru berdasarkan timestamps
        $data['image'] = time().'_'.Str::slug($request->name).'.'.$file->getClientOriginalExtension();
        // Simpan file dengan nama yang telah ditentukan
        Storage::disk('local')->put('public/produk/'.$data['image'], $file->getContent());
        // Simpan data yang sudah di validasi ke database
        Produk::create($data);

        // Alihkan user/admin ke halaman home
        return Redirect::route('produk.index')->with(['success' => 'Produk '.$data['name'].' berhasil ditambahkan']);
    }

    /**
     * Menampilkan suatu produk
     *
     * @return view
     */
    public function show(Produk $produk)
    {
        return view('development.produk.show', compact('produk'));
    }

    /**
     * Tampilkan halaman edit produk dengan mengirimkan data produk sebelumnya
     *
     * @return view
     */
    public function edit(Produk $produk)
    {
        return view('development.produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        // Validasi data yang dikirimkan kemudian simpan kedalam variable
        $new_data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);
        // Cek apakah file image tersedia
        if ($request->hasFile('image')) {
            // simpan file ke variable
            $file = $request->file('image');
            // buat nama file unik berdasarkan timestamps
            $new_data['image'] = time().'_'.Str::slug($request->name).'.'.$file->getClientOriginalExtension();
            // Simpan gambar ke local disk
            Storage::disk('local')->put('public/produk/'.$new_data['image'], $file->getContent());
            // Hapus gambar lama
            Storage::delete($produk->image);
        }
        // Update data produk
        $produk->update($new_data);

        // Alihkan ke halaman show produk
        return Redirect::route('produk.show', $produk->id)->with(['success' => "Produk {$new_data['name']} berhasil diubah"]);
    }

    /**
     * Menghapus produk dari database dan local disk
     *
     * @return Redirect
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return Redirect::route('produk.index');
    }
}
