<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\http\Controllers\UserController;
use App\http\Controllers\kelolaDataBarang;

Route::get('/', function () {
    return view('welcome');
});

route::get('/login', function () {
    return 'Selamat Datang' ;
});

route::get('/register', function () {
    return 'Silahkan Daftar Terlebih dahulu';
});

Route::redirect('/login', '/register'); //redirect routes

// Route::view('home', ['nama' => 'Budi']); //Menampilkan View langsung tanpa controller

route::get('/datastunting/{id}', function ($id) {
    return 'Data stunting ke: ' . $id;
}); //Route wajib Dengan sebuah parameter

route::get('/user/{nama?}', function ($nama  = 'Rijki') {
    return $nama;
}); // parameter opsional

route::get('/produkid/{id}', function ($id) {
    return 'Produk dengan id: ' . $id;
})->where('id', '[0-9]+'); //Route dengan parameter yang harus berupa angka

route::get('/produknama/{nama}', function ($nama) {
    return 'Produk dengan nama: ' . $nama;
})->where('nama', '[a-zA-Z]+'); //Route dengan parameter yang harus berupa huruf

route::get('/profileview', function () {
    return 'Ini dengan pemanggilan route name';
})->name('profile'); //Route dengan nama

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Ini Tampilan Dashboard Admin';
    });
}); //Route dengan prefix admin

Route::get('/data', [UserController::class, 'show']); //Route dengan controller

Route::resource('barang', kelolaDataBarang::class); //Route resource untuk CRUD

Route::get('/home', [UserController::class, 'index']); //Route dengan controller untuk menampilkan view home

Route::get('/books', [BookController::class, 'index']); //Route dengan controller untuk menampilkan view index buku
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show'); //Route dengan controller untuk menampilkan view detail buku berdasarkan id