<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
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
    </div>
    <div class="siswa">
        <ol>
            @foreach ($dataSiswa as $siswa)
                <li>{{$siswa}}</li>
            @endforeach
        </ol>
    </div>
</body>
</html>