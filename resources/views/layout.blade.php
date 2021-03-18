<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Home')</title>
</head>
<body>
    @yield('content')
    <footer>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/aboutUs">About us</a></li>
            <li><a href="/contactUs">Contact us</a></li>
        </ul>
    </nav>
    </footer>
</body>
</html>