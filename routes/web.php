<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about', function () {
   
$data = [
    'pageTitle' => 'Tentang Kami',
    'content' => 'Ini adalah halaman tentang kami.'
];
return view('about', $data);
});
Route::get('/produk', function () {
    $data = [
        'produk1', 'produk2', 'produk3'
    ];

    return view('produk', ['data' => $data]);
});
Route::get('/user', function () {
   
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('user', $data);
    });
