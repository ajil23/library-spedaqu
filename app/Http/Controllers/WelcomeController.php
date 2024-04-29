<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function ebook(){
        $ebook = Ebook::all();
        return view('welcome', compact('dataebook'));
    }
}
