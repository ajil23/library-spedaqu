<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function index(){
        $dataebook = Ebook::paginate(4);
        return view('page.ebook.ebook_view', ['dataebook' => $dataebook]);
    }

    public function add(){
        $datakategori = Category::all();
        return view('page.ebook.ebook_add', compact('datakategori'));
    }

    public function store(Request $request){
        $dataebook = new Ebook();
        $dataebook->judul = $request->judul;
        $dataebook->kategori_id = $request->kategori_id;
        $dataebook->halaman = $request->halaman;
        $dataebook->cover = "gambar";
        $dataebook->save();
        return redirect()->route('ebuku.view')->with('message', 'E-book berhasil ditambahkan!');
    }

    public function edit($id){
        $editebook = Ebook::find($id);
        $datakategori = Category::all();
        return view('page.ebook.ebook_edit', compact('editebook', 'datakategori'));
    }

    public function update(Request $request, $id){
        $dataebook = Ebook::find($id);
        $dataebook->judul = $request->judul;
        $dataebook->kategori_id = $request->kategori_id;
        $dataebook->halaman = $request->halaman;
        $dataebook->cover = "gambar";
        $dataebook->update();
        return redirect()->route('ebuku.view')->with('message', 'E-book berhasil diubah!');
    }

    public function delete($id){
        $dataebook = Ebook::find($id);
        $dataebook->delete();
        return redirect()->route('ebuku.view')->with('message', 'E-book berhasil dihapus!');
    }
}
