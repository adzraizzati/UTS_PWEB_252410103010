<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman Login
    public function login()
    {
        return view('login');
    }

    // Proses Login
    public function prosesLogin(Request $request)
    {
        $nama = $request->nama;

        return redirect('/dashboard?nama=' . urlencode($nama));
    }

    // Halaman Dashboard
    public function dashboard(Request $request)
    {
        $nama = $request->query('nama', 'Mahasiswa');

        return view('dashboard', compact('nama'));
    }

    // Halaman Pengelolaan
    public function pengelolaan(Request $request)
    {
        $nama = $request->query('nama', 'Mahasiswa');

        $mahasiswa = [
            ['nim' => '101', 'nama' => 'Andi', 'jurusan' => 'Informatika'],
            ['nim' => '102', 'nama' => 'Budi', 'jurusan' => 'Sistem Informasi'],
            ['nim' => '103', 'nama' => 'Citra', 'jurusan' => 'Informatika'],
            ['nim' => '104', 'nama' => 'Dina', 'jurusan' => 'Manajemen'],
            ['nim' => '105', 'nama' => 'Eka', 'jurusan' => 'Informatika'],
            ['nim' => '106', 'nama' => 'Anya', 'jurusan' => 'Sistem Informasi']
        ];

        return view('pengelolaan', compact('mahasiswa', 'nama'));
    }

    // Halaman Profile
    public function profile(Request $request)
    {
        $nama = $request->query('nama', 'Mahasiswa');

        return view('profile', compact('nama'));
    }
}
