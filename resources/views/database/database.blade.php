<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            <li><a href="{{ url('/database') }}">Database</a></li>
            <li><a href="{{ url('/kelas') }}">Kelas</a></li>
            <li><a href="{{ url('/siswa') }}">Siswa</a></li>
            <li><a href="{{ url('/eskul') }}">Eskul</a></li>
            <li><a href="{{ url('/spp') }}">SPP</a></li>
        </ul>
        <h1>Ini Halaman Database</h1>
        <table class="table-class" border="1">
            <tr>
                <th>Nama</th>
                <th>Umur</th>
            </tr>
            @foreach ($siswa as $item)
                <tr>
                    <td>{{$item -> nama}}</td>
                    <td>{{$item -> umur}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>