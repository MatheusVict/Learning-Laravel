<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;




Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/teste', [EventController::class, 'teste']);

Route::post('/events', [EventController::class, 'store']);


/*Route::get('/teste/{id}', function ($id) {
    return view('testes', ['id' => $id]);
});

Route::get('/tested/{id?}', function ($id = null) { // Parametro opcional
    return view('testes', ['id' => $id]);
});

Route::get('/testedd/{id?}', function ($id = null) { // Parametro opcional
    return view('testes', ['id' => $id]);
});*/
