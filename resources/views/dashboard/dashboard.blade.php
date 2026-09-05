<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="navbar">
        <ul>
           <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
            <li><a href="{{ url('/kelas') }}">Kelas</a></li>
            <li><a href="{{ url('/siswa') }}">Siswa</a></li>
            <li><a href="{{ url('/mapel') }}">Mapel</a></li>
        </ul>
        <h1>Ini Dashboard</h1>
        <div class="saya">
            <h2>Hallo Saya {{ $nama }}</h2>
            <p>Saya berumur {{ $umur }} tahun, sekarang saya kelas {{ $kelas }} jurusan {{ $jurusan }}</p>
        </div>
    </div>
</body>
</html>