    @extends('layouts.main')

    @section('title', 'Home')

    @section('content')

    @foreach($event as $events)
    <p>Evento{{ $events->title }} Na cidade{{$events->city}} sobre: {{$events->description}} privado{{$events->private}}</p>
    @endforeach

    @endsection
