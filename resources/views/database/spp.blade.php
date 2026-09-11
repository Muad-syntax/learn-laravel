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
        <h3>Tabel SPP</h3>
        <table class="spp" border="1">
            <tr>
                <th>id</th>
                <th>id_siswa</th>
                <th>nominal_pembayaran</th>
                <th>tgl_bayar</th>
            </tr>
            @foreach ($spp as $spp)
                <tr>
                    <td>{{$spp -> id}}</td>
                    <td>{{$spp -> id_siswa}}</td>
                    <td>{{$spp -> nominal_pembayaran}}</td>
                    <td>{{$spp -> tgl_bayar}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="form">
        <form action="{{ url('/spp/simpan') }}" method="POST">
            @CSRF
            <h4>Masukan Siswa</h4>
            <label for="">Pilih siswa</label>
            <select name="id_siswa" >
                <option value="id_siswa">1</option>
                <option value="id_siswa">2</option>
            </select><br>
            Nominal: <input type="text" name="nominal_pembayaran"><br>
            tgl: <input type="text" name="tgl_bayar"><br>
            <button>Tambah</button>
        </form>
    </div>
</body>
</html>