<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Category;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $databuku = Buku::paginate(4);
        return view('page.book.book_view', ['databuku' => $databuku]);
    }

    public function add(){
        $datakategori = Category::all();
        return view('page.book.book_add', compact('datakategori'));
    }

    public function store(Request $request){
        $databuku = new Buku();
        $databuku->judul = $request->judul;
        $databuku->penerbit = $request->penerbit;
        $databuku->kategori_id = $request->kategori_id;
        $databuku->halaman = $request->halaman;
        $databuku->jumlah = $request->jumlah;
        $databuku->save();
        return redirect()->route('buku.view')->with('message', 'Buku berhasil ditambahkan!');
    }

    public function edit($id){
        $editbuku = Buku::find($id);
        $datakategori = Category::all();
        return view('page.book.book_edit', compact('editbuku', 'datakategori'));
    }

    public function update(Request $request, $id){
        $databuku = Buku::find($id);
        $databuku->judul = $request->judul;
        $databuku->penerbit = $request->penerbit;
        $databuku->kategori_id = $request->kategori_id;
        $databuku->halaman = $request->halaman;
        $databuku->jumlah = $request->jumlah;
        $databuku->update();
        return redirect()->route('buku.view')->with('message', 'Buku berhasil diubah!');
    }

    public function delete($id){
        $databuku = Buku::find($id);
        $databuku->delete();
        return redirect()->route('buku.view')->with('message', 'Buku berhasil dihapus!');
    }
}
