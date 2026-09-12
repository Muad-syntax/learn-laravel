<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
    <h1>Halaman detail siswa dengan id {{$siswa -> id}}</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
        </tr>
        <tr>
            <td>{{$siswa -> nama}}</td>
            <td>{{$siswa -> umur}}</td>
        </tr>
    </table>
</body>
</html>