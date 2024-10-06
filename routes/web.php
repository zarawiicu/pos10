<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\myController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// JOBSHEET 2
Route::get('category/food-beverage', [ProductController::class, 'index'])->name('product.fb');
Route::get('category/beauty-health', [ProductController::class, 'beauty'])->name('product.beh');
Route::get('category/home-care', [ProductController::class, 'care'])->name('product.hc');
Route::get('category/baby-kid', [ProductController::class, 'baby'])->name('product.bk');


// Belum bisa menggunakan Route PREFIX karena dalam proggram ini saya belum menambahkan authentifikasi
Route::prefix('auth')->group(function(){
    Route::get('category/food-beverage', [ProductController::class, 'index'])->name('product.fb');
    Route::get('category/beauty-health', [ProductController::class, 'beauty'])->name('product.beh');
    Route::get('category/home-care', [ProductController::class, 'care'])->name('product.hc');
    Route::get('category/baby-kid', [ProductController::class, 'baby'])->name('product.bk');
});

//Route::get('/user/{id}/{name}',[myController::class, 'user'])->name('user');
Route::get('/penjualan', [myController::class, 'penjualan'])->name('penjualan');

//JOBSHEET 3
Route::get('/level', [LevelController::class, 'index'])->name('level.index');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/user/', [UserController::class, 'index'])->name('user');

//jobsheet 5
//FORM TAMBAH
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('tambah');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('tambah_simpan');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('ubah');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('ubah_simpan');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('hapus');

// Route::get('/user', function () {
//     $user_id = request()->user_id;
//     return view('user', $user_id);
// })->name('user');
