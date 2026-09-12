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
        <h3>Tabel Eskul</h3>
        <table class="eskul" border="1">
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>ketua</th>
            </tr>
            @foreach ($eskul as $item)
                <tr>
                    <td>{{$item -> id}}</td>
                    <td>{{$item -> nama}}</td>
                    <td>{{$item -> ketua}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form">
        <form action="{{ url('/eskul/simpan') }}" method="POST">
            @if ($errors->any())
                <div style="color:red;">
                    <ul type="none">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @CSRF
            <h4>Masukan Kelas</h4>
            Nama: <input type="text" name="nama"><br>
            Ketua: <input type="text" name="ketua"><br>
            <button>Tambah</button>
        </form>
    </div>
</body>
</html>