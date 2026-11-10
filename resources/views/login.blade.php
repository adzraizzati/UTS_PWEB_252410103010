@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="card" style="max-width: 450px; margin: 50px auto;">

    <h2>Login Pengguna</h2>

    <p>Selamat datang di Aplikasi Data Mahasiswa.</p>

    <form action="/login" method="POST">

        @csrf

        <label>Nama Pengguna</label>

        <input type="text" name="nama"
               placeholder="Masukkan nama kamu" required>

        <button type="submit">Login</button>

    </form>

</div>

@endsection
