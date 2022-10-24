@extends('layouts.main')

@section('title', 'Criação')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cria ai</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="local do evento">
        </div>
        <div class="form-group">
            <label for="private">Privado</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" id="description" name="description" placeholder="Nome do evento"></textarea>
        </div>
        <input type="submit" class="btn btn-primary mt-4" value="Criar">
    </form>
</div>

@endsection
