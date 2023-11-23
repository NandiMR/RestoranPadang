<h1>Daftar Produk</h1>

<ul>
    @foreach($data as $pageTitle)
        <li>{{ $pageTitle }}</li>
    @endforeach
</ul>