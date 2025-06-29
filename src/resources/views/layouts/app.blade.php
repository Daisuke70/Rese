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
            <div class="hamburger-wrapper">
                <div class="hamburger-menu" onclick="toggleMenu(this)">
                    <div class="hamburger-line__1"></div>
                    <div class="hamburger-line__2"></div>
                    <div class="hamburger-line__3"></div>
                </div>
                <span class="site-title">Rese</span>
            </div>

            <ul class="menu">
                @guest
                    <li class="menu-home"><a href="/">Home</a></li>
                    <li class="menu-register"><a href="{{ route('show.register') }}">Registration</a></li>
                    <li class="menu-login"><a href="{{ route('show.login') }}">Login</a></li>
                @endguest

                @auth
                    <li class="menu-home"><a href="{{ route('shop.index') }}">Home</li>
                    <li class="menu-logout">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="menu__logout-button">
                                <span class="logout">Logout</span>
                            </button>
                        </form>
                    </li>
                    <li class="menu-dashboard"><a href="">MyPage</a></li>
                @endauth
            </ul>
            <script>
                function toggleMenu(element) {
                    element.classList.toggle("active");

                    const menu = document.querySelector('.menu');
                    const content = document.querySelector('.content');
                    const app = document.querySelector('.app');
                    const body = document.body;

                    const isOpen = menu.classList.contains("menu--open");

                    if (isOpen) {
                        menu.classList.remove("menu--open");
                        content.style.display = "block";
                        app.classList.remove("body--menu-open");
                        body.classList.remove("body--menu-open");
                    } else {
                        menu.classList.add("menu--open");
                        content.style.display = "none";
                        app.classList.add("body--menu-open");
                        body.classList.add("body--menu-open");
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