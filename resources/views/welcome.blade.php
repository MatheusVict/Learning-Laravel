    @extends('layouts.main')

    @section('title', 'Home')

    @section('content')

    @if(10 > 5)
    <p>verdade</p>
    @endif

    @if($nome == "Matheus")
    <p>Olá {{$nome}} com {{$idade}} anos</p>
    @elseif($nome == "Pedro")
    <p>nome pedro</p>
    @else
    <p>Olá piranha</p>
    @endif

    @for($i = 0; $i < count($arrio); $i++) <p>{{ $arrio[$i] }} na posição {{$i}}</p>
        @if($i == 2)
        <p>Igual a 2 pai</p>
        @endif
        @endfor

        @foreach($nomes as $nome)
        <p>{{$loop->index}}</p>
        @endforeach

        @php
        $name = "Tú";
        echo $name;
        @endphp

        <!-- VDD LINDA -->
        {{-- sem render --}}
        @endsection
