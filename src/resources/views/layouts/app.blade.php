<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
</head>
<body>
    <div class="app">
        <div class="hamburger-menu" onclick="toggleMenu(this)">
            <div class="hamburger-line__1"></div>
            <div class="hamburger-line__2"></div>
            <div class="hamburger-line__3"></div>
        </div>

        <ul class="menu">
            <li><a href="">Home</a></li>
            <li><a href="">Registration</a></li>
            <li><a href="">Login</a></li>
        </ul>

        <script>
            function toggleMenu(element) {
                element.classList.toggle("active");
            }
        </script>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
