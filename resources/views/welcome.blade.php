    @extends('layouts.main')

    @section('title', 'Dashboard')

    @section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque o evento</h1>
        <form action="/" method="GET">
            <input type="text" id="serach" name="search" class="form-control" placeholder="Procurar evento">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h1>Buscado por: {{$search}}</h1>
        @else
        <h1>Proximos eventos</h1>
        <p class="subtitles">Veja os eventos</p>
        @endif
        <div id="cards-container" class="row">
            @foreach($event as $events)
            <div class="card col-md-3">
                <img src="/img/events/{{$events->image}}" alt="{{$events->title}}">
                <div class="card-body">
                    <p class="card-date">{{date_format($events->date, 'd/m/Y  h:m')}}</p>
                    <h5 class="card-title">{{$events->title}}</h5>
                    <p class="card-participants">X Partipantes</p>
                    <a href="/events/{{$events->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
            @if(count($event) == 0 && $search)
            <h3>Não foi possível encontrar: {{$search}} <a href="/">Ver todos</a></h3>
            @elseif(count($event) == 0)
            <h1>Não há eventos registrados</h1>
            @endif
        </div>
    </div>

    @endsection
