@extends('layouts.main')

@section('title', 'Teste')

@section('content')

<h1>Meu primeiro comando no php muryllo seu baitola</h1>
<a href="/">ARIO</a>

@if($busca != '')
<p>Busca por {{$busca}}</p>
@endif

@endsection
