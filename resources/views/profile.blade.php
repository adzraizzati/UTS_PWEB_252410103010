@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="card">

    <h2>Profile Pengguna</h2>

    <p>Nama Pengguna: <strong>{{ $nama }}</strong></p>

    <p>Status: Pengguna Aplikasi</p>

    <p>Aplikasi: Manajemen Data Mahasiswa</p>

</div>

@endsection
