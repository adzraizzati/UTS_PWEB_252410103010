@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="card">

    <h2>Dashboard</h2>

    <h3>Selamat Datang, {{ $nama }}!</h3>

    <p>Selamat datang di Aplikasi Manajemen Data Mahasiswa.</p>

</div>

<div class="card">

    <h3>Informasi Aplikasi</h3>

    <p>Nama Aplikasi: Data Mahasiswa</p>

    <p>Jumlah Mahasiswa: 6 Orang</p>

    <p>Status: Aktif</p>

</div>

@endsection
