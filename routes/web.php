<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EbookController;
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

    Route::prefix('kategori')->group(function () {
        Route::get('/view', [CategoryController::class, 'index'])->name('cat.view');
        Route::get('/add', [CategoryController::class, 'add'])->name('cat.add');
        Route::post('/store', [CategoryController::class, 'store'])->name('cat.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('cat.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('cat.update');
        Route::get('/hapus/{id}', [CategoryController::class, 'delete'])->name('cat.delete');
    });

    Route::prefix('ebuku')->group(function () {
        Route::get('/view', [EbookController::class, 'index'])->name('ebuku.view');
        Route::get('/add', [EbookController::class, 'add'])->name('ebuku.add');
        Route::get('/edit', [EbookController::class, 'edit'])->name('ebuku.edit');
    });
});


