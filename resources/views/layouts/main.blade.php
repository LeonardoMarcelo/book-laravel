<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/livro.css">
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
</head>

<body>
    <header class="header nav-header">
        <nav class="nav-bar">
            <h2 class="logo_nav">Biblioteca ETE</h2>
            <ul class="menu_nav">
                <li class="item-menu_nav"><a href="/" class="link-menu">Home</a></li>
                <li class="item-menu_nav"><a href="#livros" class="link-menu">Livros</a></li>
                <li class="item-menu_nav"><a href="#footer" class="link-menu">Contato</a></li>
                @auth
                    <li class="item-menu_nav">
                        <a href="/dashboard" class="link-menu">Dashboard</a>
                    </li>
                    <li class="item-menu_nav">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="link-menu"
                                onclick="event.preventDefault();
                    this.closest('form').submit();">Sair</a>
                        </form>
                    </li>

                @endauth
                @guest
                    <li class="item-menu_nav">
                        <a href="/dashboard" class="link-menu">Entrar</a>
                    </li>
                @endguest
            </ul>
            <div class="search_nav">
                <form action="/" method="GET" class="form-search-mob">
                    <input type="text" id="search" name="search" class="box-search" placeholder="faça sua pesquisa">
                </form>
                <button class="btn-search">
                    <svg xmlns="http://www.w3.org/2000/svg" class="search-icon" viewBox="0 0 512 512">
                        <title>Search</title>
                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                            stroke="#fff" stroke-miterlimit="10" stroke-width="52" />
                        <path fill="#fff" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10"
                            stroke-width="52" d="M338.29 338.29L448 448" />
                    </svg>
                </button>
            </div>
            <div class="toggle-mob">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <div class="menu-mob">

            <form action="/" method="GET" class="form-search-mob">
                <input type="text" class="box-search-mob" id="search" name="search"
                    placeholder="Faça sua pesquisa">
                <svg xmlns="http://www.w3.org/2000/svg" class="search-icon-mob" viewBox="0 0 512 512">
                    <title>Search</title>
                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                        stroke="#fff" stroke-miterlimit="10" stroke-width="52" />
                    <path fill="#fff" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="52"
                        d="M338.29 338.29L448 448" />
                </svg>
            </form>

            <li class="item-menu_nav-mob"><a href="/" class="link-menu-mob">Home</a></li>
            <li class="item-menu_nav-mob atual-page"><a href="#livros" class="link-menu-mob">Livros</a></li>
            <li class="item-menu_nav-mob"><a href="#footer" class="link-menu-mob">Contato</a></li>
            @auth
                <li class="item-menu_nav-mob">
                    <a href="/dashboard" class="link-menu-mob">Dashboard</a>
                </li>
                <li class="item-menu_nav-mob">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="link-menu-mob"
                            onclick="event.preventDefault();
                this.closest('form').submit();">Sair</a>
                    </form>
                </li>

            @endauth
            @guest
                <li class="item-menu_nav-mob">
                    <a href="/dashboard" class="link-menu-mob">Entrar</a>
                </li>
            @endguest



        </div>
    </header>

    <main>
        @yield('content')
    </main>




    <footer class="footer" id="footer">
        <div class="footer-data container">
            <a href="" class="logo footer-logo">BibliotecaETE</a>

            <nav class="footer-nav">
                <div class="navegacao">
                    <h3 class="footer-title">Navegação</h3>

                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-link">Destaque</a>
                        </li>

                        <li class="footer-item">
                            <a href="#" class="footer-link">Livros</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-link">Contato</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-link">Sugestões</a>
                        </li>
                    </ul>
                </div>

                <div class="fale-conosco">
                    <h3 class="footer-title">Fale Conosco</h3>

                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="#" class="footer-link">981016274</a>
                        </li>

                        <li class="footer-item">
                            <a href="#" class="footer-link">email.example.com</a>
                        </li>
                    </ul>

                    <div class="social-list">
                        <i class="social-icon facebook fa-brands fa-facebook-f"></i>

                        <i class="social-icon instagram fa-brands fa-instagram"></i>
                    </div>
                    </ul>
                </div>
            </nav>
            <p class="footer-copy">&copy;2021 Copyright: TeamLagDev</p>
        </div>

    </footer>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/carrossel.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/animation.js"></script>



</body>

</html>
