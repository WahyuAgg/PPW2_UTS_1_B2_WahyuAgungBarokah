@extends('layouts.template')

@section('title', 'Home') <!-- Menetapkan judul untuk halaman ini menjadi 'Home' -->

@section('content')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Menetapkan isi konten untuk bagian @yield('content') di file template  -->
    <h2>Selamat datang di Halaman Utama</h2>
    <!-- Tabel menampilkan data pengguna -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($pemain_mu as $pemain)
                <tr>
                    <td>{{ $pemain->id }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung }}</td>
                    <td>{{ $pemain->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
