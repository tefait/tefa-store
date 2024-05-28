<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::with(['parent'])->orderBy('created_at', 'DESC')->paginate(10);
        $parent = Category::getParent()->orderBy('name', 'ASC')->get();

        return view('categories.index', compact('category', 'parent'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50|unique:categories',
        ]);

        $request->request->add(['slug' => $request->name]);

        Category::create($request->except('_token'));

        return redirect(route('category.index'))->with(['success' => 'Kategori Baru Ditambahkan!']);
    }

    public function show(string $id)
    {
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $parent = Category::getparent()->orderby('name', 'asc')->get();

        return view('categories.edit', compact('category', 'parent'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50|unique:categories,name,'.$id,
        ]);

        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);

        return redirect(route('category.index'))->with(['success' => 'Kategori Diperbaharui!']);
    }

    public function destroy($id)
    {

        $category = Category::withCount(['child', 'product'])->find($id);
        if ($category->child_count == 0 && $category->product_count == 0) {
            $category->delete();

            return redirect(route('category.index'))->with(['success' => 'Kategori Dihapus!']);
        }

        return redirect(route('category.index'))->with(['error' => 'Kategori Ini Memiliki Anak Kategori!']);
    }
}
