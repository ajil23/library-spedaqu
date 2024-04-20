<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        return view('page.book.book_view');
    }

    public function add(){
        return view('page.book.book_add');
    }

    public function store(){

    }

    public function edit(){
        return view('page.book.book_edit');
    }

    public function update(){

    }

    public function delete(){
        
    }
}
