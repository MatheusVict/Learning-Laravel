<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        $search = request('search');

        if ($search) {
            $event = Event::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $event = Event::all();
        }


        return view('welcome', ['event' => $event, 'search' => $search]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {

        $event = new Event();

        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        // Image

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso');
    }


    public function teste()
    {
        $busca = request('search');

        return view('teste', ['busca' => $busca]);
    }

    public function show($id)
    {

        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    }
}
