@extends('layouts.main')
@section('title', $event->title)
@section('content')




    <section class="containers view-book">
        <img src="/img/events/{{ $event->image }}" class="img-background"alt="{{ $event->title }}">
        <div class="main-book">
            <div class="img-book">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            </div>
            <div class="aside-book">
                <div class="info-book">
                    <div class="title-book">
                        <h1>{{ $event->title }}</h1>
                        {{-- <span>VOLUME II DA TRILOGIA FRONTEIRAS DO UNIVERSO</span> --}}
                    </div>
                    <h3 class="charac-book"><span class="acent-text">Autor </span> {{ $event->autor }}</h3>
                    <h3 class="charac-book"><span class="acent-text">Gênero </span> {{ $event->categoria_id }}</h3>
                    <p class="description-book"><span class="acent-text">Descrição </span> {{ $event->description }}
                    </p>
                </div>
                <div class="actions-book">
                    <button class="btn-ler"><a href="{{ $event->book_link }}" target="_blank" download="{{ $event->book_link }}">Ler</a> </button>
                    <button class="btn-fav"><a href="{{ $event->book_link }}"target="_blank" download="{{ $event->book_link }}"> Download</a>
                       
                        <img src="/img/download_FILL0_wght400_GRAD0_opsz48.svg" alt="" class="img-dwnload">
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
