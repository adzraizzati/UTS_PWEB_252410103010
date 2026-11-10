@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')

<div class="card">

    <h2>Data Mahasiswa</h2>

    <p>Berikut adalah daftar mahasiswa.</p>

    <table>

        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>

        @foreach ($mahasiswa as $index => $mhs)

        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['jurusan'] }}</td>
        </tr>

        @endforeach

    </table>

</div>

@endsection
