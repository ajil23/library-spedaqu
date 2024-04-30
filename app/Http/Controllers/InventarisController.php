<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function index(){
        $invent = Inventaris::paginate(4);
        return view('page.inventaris.inventory_view', compact('invent'));
    }
    
    public function add(){
        $databuku = Buku::all();
        return view('page.inventaris.inventory_add', compact('databuku'));
    }

    public function store(Request $request){
        $invent = new Inventaris();
        $invent->buku_id = $request->buku_id;
        $invent->nama = $request->nama;
        $invent->kondisi_sebelum = $request->kondisi_sebelum;
        $invent->kondisi_sesudah = $request->kondisi_sesudah;
        $invent->peminjaman = $request->peminjaman;
        $invent->pengembalian = $request->pengembalian;
        $invent->save();
        return redirect()->route('inventaris.view')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit(){
        return view('page.book.book_edit');
    }

    public function update(){

    }

    public function delete(){
        
    }
}
