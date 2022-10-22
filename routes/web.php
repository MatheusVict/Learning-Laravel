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
    return view('teste');
});
