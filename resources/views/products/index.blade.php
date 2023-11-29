@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <ul>
        @foreach ($products as $product)
            <li> { { $product->name } } </li>
            <li> { { $product['name'] } } - { { $product['price'] } } </li>
        @endforeach
    </ul>
</div>
@endsection
