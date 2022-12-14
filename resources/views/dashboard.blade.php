@extends('layouts.main')
@section('title', 'Biblioteca add livro')

@section('content')


    
        <div class="col-md-10 offset-md-1 dashboard-events-container">
            @if (count($events) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome:</th>
                            <th scope="col">autor</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td scope="row">{{ $loop->index + 1 }}</td>
                                <td><a href="/events/{{ $event->id }}">{{ $events->title }}</a></td>
                                <td>{{ count($event->title) }}</td>
                                <td>
                                    <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn">
                                        <ion-icon name="create-outline"></ion-icon>Editar
                                    </a>
                                    <form action="/events/{{ $event->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn">
                                            <ion-icon name="trash-outline"></ion-icon>Deletar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Você ainda não tem livros, <a href="/events/create">Adicionar livros</a></p>
            @endif
        </div>


@endsection

