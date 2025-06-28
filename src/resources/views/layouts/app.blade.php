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
        <header class="header">
            <div class="hamburger-menu" onclick="toggleMenu(this)">
                <div class="hamburger-line__1"></div>
                <div class="hamburger-line__2"></div>
                <div class="hamburger-line__3"></div>
            </div>

            <ul class="menu">
                <li class="menu-home"><a href="">Home</a></li>
                <li class="menu-register"><a href="">Registration</a></li>                
                <li class="menu-login"><a href="">Login</a></li>
            </ul>

            <script>
                function toggleMenu(element) {
                    element.classList.toggle("active");

                    const menu = document.querySelector('.menu');
                    const content = document.querySelector('.content');
                    const app = document.querySelector('.app');

                    if (menu.style.display === "block") {
                        menu.style.display = "none";
                        content.style.display = "block";
                        app.classList.remove('body--menu-open');
                    } else {
                        menu.style.display = "block";
                        content.style.display = "none";
                        app.classList.add('body--menu-open');
                    }
                }
            </script>
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
