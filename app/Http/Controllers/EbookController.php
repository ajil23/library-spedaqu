<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function index(){
        return view('page.ebook.ebook_view');
    }

    public function add(){
        return view('page.ebook.ebook_add');
    }

    public function store(){

    }

    public function edit(){
        return view('page.ebook.ebook_edit');
    }

    public function update(){

    }

    public function delete(){
        
    }
}
