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
                <th>nama</th>
                <th>nominal_pembayaran</th>
                <th>tgl_bayar</th>
            </tr>
            @foreach ($spp as $spp)
                <tr>
                    <td>{{$spp -> id}}</td>
                    <td>{{$spp -> nama_siswa}}</td>
                    <td>{{$spp -> nominal}}</td>
                    <td>{{$spp -> tgl}}</td>
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
        <form action="{{ url('/spp/simpan') }}" method="POST">
            @csrf
            <h4>Masukan Siswa</h4>
            <label for="">Pilih siswa</label>
            <select name="id_siswa" >
                @foreach ($siswa as $item)
                    <option value="{{$item -> id}}">{{ $item -> nama }}</option>
                    
                @endforeach
                
            </select><br> 
            Nominal: <input type="text" name="nominal_pembayaran"><br>
            tgl: <input type="date" name="tgl_bayar"><br>
            <button>Tambah</button>
        </form>
    </div>
</body>
</html>