<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $nome = 'Matheus';
    $idade = 18;

    $arrio = [10, 2, 3, 4, 5, 6];
    $nomes = ["Victor", "Natalia", "Shirley", "Tú"];

    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade,
        'arrio' => $arrio,
        'nomes' => $nomes
    ]);
});

Route::get('/teste', function () {

    $busca = request('search');

    return view('teste', ['busca' => $busca]);
});

Route::get('/teste/{id}', function ($id) {
    return view('testes', ['id' => $id]);
});

Route::get('/tested/{id?}', function ($id = null) { // Parametro opcional
    return view('testes', ['id' => $id]);
});

Route::get('/testedd/{id?}', function ($id = null) { // Parametro opcional
    return view('testes', ['id' => $id]);
});
