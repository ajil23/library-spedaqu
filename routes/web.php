<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::prefix('buku')->group(function () {
        Route::get('/view', [BukuController::class, 'index'])->name('buku.view');
        Route::get('/add', [BukuController::class, 'add'])->name('buku.add');
        Route::get('/edit', [BukuController::class, 'edit'])->name('buku.edit');
    });
});


