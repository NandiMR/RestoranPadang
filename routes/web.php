<?php

use App\Models\Product; // Tambahkan use statement untuk model Product
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    $products = App\Models\Product::all();
    return view('products.index', ['products' => $products]);
});
Route::get('/about', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
});

Route::get('/produk', function () {
    $data = [
        'produk1' => 'Nama Produk 1', // Tambahkan key untuk setiap produk
        'produk2' => 'Nama Produk 2',
        'produk3' => 'Nama Produk 3'
    ];

    return view('produk', ['data' => $data]);
});

Route::get('/user', function () {
    $data = [
        'pageTitle' => 'Halaman Pengguna',
        'content' => 'Ini adalah halaman pengguna.'
    ];
    return view('user', $data);
});

Route::get('/products', 'ProductController@index');

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');