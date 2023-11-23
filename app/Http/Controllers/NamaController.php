<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaController extends Controller
{
    //
}
class ProductController extends Controller
{
    // Properti untuk menyimpan data produk
    private $products;

    // Properti lainnya...
}
class ProductController extends Controller
{
    private $products;

    public function __construct()
    {
        // Mengisi properti dengan data produk dari model
        $this->products = Product::all();
    }

    // Metode-metode lainnya...
}
