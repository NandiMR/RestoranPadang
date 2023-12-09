@extends('layouts.app')
@section('content')
    <div class="container">
    <h2>Daftar Mahasiswa</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th> 
            </tr>
        </thead>
        <tbody>
        @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td> { { $mahasiswa->id } } </td>
            <td> { { $mahasiswa->nama } } </td>
            <td> { { $mahasiswa->alamat } } </td>
            <td> { { $mahasiswa->tanggal_lahir } } </td>
            <td>
            <form action="route('mahasiswa.destroy', $mahasiswa->id)" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection