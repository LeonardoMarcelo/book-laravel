@extends('layouts.main')
@section('title', 'Biblioteca Welcome')

@section('content')

    <div class="menu-mob">

        <form method="GET" action="/" class="form-search-mob">
            <input type="text" id="search" name="search" class="box-search-mob" required placeholder="Faça sua pesquisa">
            <svg xmlns="http://www.w3.org/2000/svg" class="search-icon-mob" viewBox="0 0 512 512">
                <title>Search</title>
                <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                    stroke="#fff" stroke-miterlimit="10" stroke-width="52" />
                <path fill="#fff" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="52"
                    d="M338.29 338.29L448 448" />
            </svg>
        </form>

        <li class="item-menu_nav-mob"><a href="" class="link-menu-mob">Home</a></li>
        <li class="item-menu_nav-mob atual-page"><a href="" class="link-menu-mob">Livros</a></li>
        <li class="item-menu_nav-mob"><a href="#footer" class="link-menu-mob">Contato</a></li>



    </div>

    <section class="hero-section">
        <div class="background-container">
            @foreach ($featured as $feature)
                <div class="hero-img">
                    <img src="img/events/{{ $feature->image }}" alt="">
                </div>

                <div class="hero-data">
                    <h1 id="h1" class="hero-title">{{ $feature->title }}</h1>
                    <p class="hero-paragraph">
                        {{ $feature->description }}
                    </p>
                    <div class="buttons">
                        <a href="/events/{{ $feature->id }}" class="btn btn--primary">Ler</a>
                        <a href="/events/{{ $feature->id }}" class="btn btn--secondary">Saiba mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <div class="carrosel-container">
        @if ($search)
            <h2 class="carrossel-title-todos">Buscando por: {{ $search }}</h2>
            <div class="swiper" id="livros">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    @foreach ($events as $event)
                        <div class="swiper-slide">
                            <a href="/events/{{ $event->id }}">
                                <img class="list" src="img/events/{{ $event->image }}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>

                @if (count($events) == 0 && $search)
                    <p>Não foi possível encontrar nenhum livro com {{ $search }}!<a href="/">Ver todos!</a>
                    </p>
                @elseif(count($events) == 0)
                    <p>Não há livros disponiveis!</p>
                @endif
            </div>
        @else
            <div class="swiper" id="livros">
                <h2 class="carrossel-title-todos">Recentes</h2>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    @foreach ($events as $event)
                        <div class="swiper-slide">
                            <a href="/events/{{ $event->id }}">
                                <img class="list" src="img/events/{{ $event->image }}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @if (count($events) == 0 && $search)
                <p>Não foi possível encontrar nenhum livro com {{ $search }}!<a href="/">Ver todos!</a>
                </p>
            @elseif(count($events) == 0)
                <p>Não há livros disponiveis!</p>
            @endif

            <div class="swiper">
                <h2 class="carrossel-title-todos">Ação</h2>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <!-- Slides -->
                    @foreach ($action as $event)
                        <div class="swiper-slide">
                            <a href="/events/{{ $event->id }}">
                                <img class="list" src="img/events/{{ $event->image }}" alt="">
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
            @if (count($events) == 0 && $search)
                <p>Não foi possível encontrar nenhum livro com {{ $search }}!<a href="/">Ver todos!</a>
                </p>
            @elseif(count($events) == 0)
                <p>Não há livros disponiveis!</p>
            @endif

            <div class="swiper">
                <h2 class="carrossel-title-todos">Romance</h2>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <!-- Slides -->
                    @foreach ($romance as $event)
                        <div class="swiper-slide">
                            <a href="/events/{{ $event->id }}">
                                <img class="list" src="img/events/{{ $event->image }}" alt="">
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>

        @endif
        @if (count($events) == 0 && $search)
            <p class="carrossel-title-todos">Não foi possível encontrar nenhum livro com {{ $search }}!<a
                    href="/">Ver todos!</a>
            </p>
        @elseif(count($events) == 0)
            <p class="carrossel-title-todos">Não há livros disponiveis!</p>
        @endif
    </div>

    {{-- <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">Slide 1</div>
              <div class="swiper-slide">Slide 2</div>
              <div class="swiper-slide">Slide 3</div>
              ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
          </div> --}}



@endsection
