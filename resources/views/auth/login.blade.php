<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
            <li><a href="{{ url('/mapel') }}">Mapel</a></li>
        </ul>
    </div>
    <div class="container">
        <form action="">
            <label for="email">Email</label>
            <br>
            <input type="email">
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password">
            <br>
            <button type="sumbit">Login</button>
            <p>Belum Punya akun? <a href="{{ url('/register') }}">Register</a></p>
        </form>
    </div>
</body>
</html>