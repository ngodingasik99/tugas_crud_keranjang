<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\keranjangController;
use Illuminate\Routing\Route as RoutingRoute;
// use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/kategori/add', [KategoriController::class, 'add']);
    Route::post('/kategori/store', [KategoriController::class, 'store']);
    Route::get('/kategori/{id}/update', [KategoriController::class, 'update']);
    Route::put('/kategori/{id}', [KategoriController::class, 'action']);
    Route::get('/kategori/{id}', [KategoriController::class, 'distroy']);

    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/add', [ProdukController::class, 'add']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/{id}/update', [ProdukController::class, 'update']);
    Route::put('/produk/{id}', [ProdukController::class, 'action']);
    Route::get('/produk/{id}', [ProdukController::class, 'distroy']);

    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::get('/keranjang/{id}/baru', [KeranjangController::class, 'baru']);
    Route::get('/keranjang/{id}', [KeranjangController::class, 'action']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
