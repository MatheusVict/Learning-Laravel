<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $event = Event::all();

        return view('welcome', ['event' => $event]);
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
