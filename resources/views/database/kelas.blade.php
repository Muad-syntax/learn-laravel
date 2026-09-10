<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kelas</title>
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
    </div>
    <div class="table-class">
        <h3>Tabel Kelas</h3>
        <table class="kelas" border="1">
            <tr>
                <th>id</th>
                <th>kelas</th>
                <th>jurusan</th>
            </tr>
            @foreach ($kelas as $kelas)
                <tr>
                    <td>{{$kelas -> id}}</td>
                    <td>{{$kelas -> kelas}}</td>
                    <td>{{$kelas -> jurusan}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>