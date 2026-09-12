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
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            <li><a href="{{ url('/database') }}">Database</a></li>
            <li><a href="{{ url('/kelas') }}">Kelas</a></li>
            <li><a href="{{ url('/siswa') }}">Siswa</a></li>
            <li><a href="{{ url('/eskul') }}">Eskul</a></li>
            <li><a href="{{ url('/spp') }}">SPP</a></li>
        </ul>
    </div>
    <div class="table-class">
        <h3>Tabel Siswa</h3>
        <table class="siswa" border="1">
            <tr>
                
                <th>id</th>
                <th>nama</th>
                <th>umur</th>
                <th>Aksi</th>
                
            </tr>
            @foreach ($dataSiswa as $siswa)
                <tr>
                    
                    <td>{{$siswa -> id}}</td>
                    <td>{{$siswa -> nama}}</td>
                    <td>{{$siswa -> umur}}</td>
                    <td><a href='{{ url("/siswa/$siswa->id") }}'>Detail</a></td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="form">
        @if ($errors->any())
            <div style="color:red;">
                <ul type="none">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('/siswa/simpan') }}" method="POST">
            @CSRF
            <h4>Masukan Siswa</h4>
            Nama: <input type="text" name="nama" value="{{ old('nama') }}"><br>
            Umur: <input type="text" name="umur" value="{{ old('umur') }}"><br>
            <button>Tambah</button>
        </form>
    </div>
</body>
</html>