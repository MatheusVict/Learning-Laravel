@extends('layouts.main')

@section('title', 'Meus eventos')

@section('content')
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($event) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($event as $events)
            <tr>
                <td scope="row">{{$loop->index + 1}}</td>
                <td><a href="/events/{{$events->id}}">{{$events->title}}</a></td>
                <td>{{count($events->users)}}</td>
                <td>
                    <a href="/events/edit/{{$events->id}}" class="btn btn-info edit-btn">
                        <ion-icon name="create-outline"></ion-icon>Editar
                    </a>
                    <form action="/events/{{$events->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">
                            <ion-icon name="trash-outline"></ion-icon>
                            Deletar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Voçê ainda não possui eventos <a href="/events/create">Cria um</a></p>
    @endif
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Eventos Cofirmados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($eventsAsParticipant) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventsAsParticipant as $events)
            <tr>
                <td scope="row">{{$loop->index + 1}}</td>
                <td><a href="/events/{{$events->id}}">{{$events->title}}</a></td>
                <td>{{count($events->users)}}</td>
                <td>
                    <form action="/events/leave/{{$events->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delet-btn">
                            <ion-icon name="trash-outline"></ion-icon>Sair do evento
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Você ainda não está participando de nenhum evento <a href="/">Todos eventos</a></p>
    @endif
</div>
@endsection
