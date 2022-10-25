    @extends('layouts.main')

    @section('title', 'Home')

    @section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque o evento</h1>
        <form action="">
            <input type="text" id="serach" name="search" class="form-control" placeholder="Procurar evento">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Proximos Eventos</h2>
        <p class="subtitles">Veja os eventos</p>
        <div id="cards-container" class="row">
            @foreach($event as $events)
            <div class="card col-md-3">
                <img src="/img/events/{{$events->image}}" alt="{{$events->title}}">
                <div class="card-body">
                    <p class="card-date">10/09/2022</p>
                    <h5 class="card-title">{{$events->title}}</h5>
                    <p class="card-participants">X Partipantes</p>
                    <a href="/events/{{$events->id}}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @endsection
