<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;




Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');

Route::get('/teste', [EventController::class, 'teste']);

Route::post('/events', [EventController::class, 'store']);

Route::get('/events/{id}', [EventController::class, 'show']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');

Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');

Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');


/*Route::get('/teste/{id}', function ($id) {
    return view('testes', ['id' => $id]);
});

Route::get('/tested/{id?}', function ($id = null) { // Parametro opcional
    return view('testes', ['id' => $id]);
});

Route::get('/testedd/{id?}', function ($id = null) { // Parametro opcional
    return view('testes', ['id' => $id]);
});*/
