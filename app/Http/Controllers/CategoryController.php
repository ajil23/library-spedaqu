<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $datakategori = Category::paginate(4);
        return view('page.category.category_view', ['datakategori' => $datakategori]);
    }

    public function add(){
        return view('page.category.category_add');
    }

    public function store(Request $request){
        $datakategori = new Category();
        $datakategori->nama_kategori = $request->nama_kategori;
        $datakategori->save();
        return redirect()->route('cat.view');
    }

    public function edit($id){
        $editkategori = Category::find($id);
        return view('page.category.category_edit', compact('editkategori'));
    }

    public function update(Request $request, $id){
        $editkategori = Category::find($id);
        $editkategori->nama_kategori = $request->nama_kategori;
        $editkategori->update();
        return redirect()->route('cat.view');
    }

    public function delete(string $id){
        $deletekategori = Category::find($id);
        $deletekategori->delete();
        return redirect()->route('cat.view');
    }
}
