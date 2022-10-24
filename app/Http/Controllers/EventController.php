<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
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
    }

    public function create()
    {
        return view('events.create');
    }

    public function teste()
    {
        $busca = request('search');

        return view('teste', ['busca' => $busca]);
    }
}
