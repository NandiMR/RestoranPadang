<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestoranPadang extends Controller
{
     public function index(){
        
        $data = [
            'pageTitle' => 'Produk',
            'content' => 'Ini adalah halaman tentang Produk.'
            ];
            return view('produk', compact('data'));
     }
}
