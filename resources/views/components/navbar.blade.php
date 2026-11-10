<nav style="background: white; padding: 20px; border-bottom: 2px solid #2563eb;">

    <strong style="font-size: 20px; color: #2563eb;">
        DATA MAHASISWA
    </strong>

    <div style="margin-top: 15px; display: flex; gap: 20px; flex-wrap: wrap;">

        <a href="/dashboard?nama={{ urlencode(request('nama', 'Mahasiswa')) }}">
            Dashboard
        </a>

        <a href="/pengelolaan?nama={{ urlencode(request('nama', 'Mahasiswa')) }}">
            Pengelolaan
        </a>

        <a href="/profile?nama={{ urlencode(request('nama', 'Mahasiswa')) }}">
            Profile
        </a>

    </div>

</nav>
