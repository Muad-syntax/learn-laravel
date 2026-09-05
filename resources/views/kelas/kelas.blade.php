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
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
            <li><a href="{{ url('/kelas') }}">Kelas</a></li>
            <li><a href="{{ url('/siswa') }}">Siswa</a></li>
            <li><a href="{{ url('/mapel') }}">Mapel</a></li>
        </ul>
    </div>
    <div class="table-class">
        <table class="kelas" border="1">
           <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
           </tr>
           <tr>
                <td>Zein</td>
                <td>XII</td>
                <td>RPL 2</td>
           </tr>
           <tr>
                <td>Farel</td>
                <td>XII</td>
                <td>RPL 1</td>
           </tr>
           <tr>
                <td>Muad</td>
                <td>XII</td>
                <td>RPL 2</td>
           </tr>
           <tr>
                <td>Baskoro</td>
                <td>XII</td>
                <td>RPL 1</td>
           </tr>
        </table>
    </div>
</body>
</html>