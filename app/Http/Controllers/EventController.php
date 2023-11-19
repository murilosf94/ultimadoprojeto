<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;


class EventController extends Controller
{


    public function index(Event $events) {

        $events = $events -> all();
    
        return view('index',['events' => $events]);

    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request) {

        $event = new Event;
        
        $event->name = $request->name;
        $event->date = $request->date;
        $event->age = $request->age;
        $event->guests = $request->guests;
        $event->items = $request->items;
        $event->participantes = $request->participantes;


        $event->save();

        return redirect('/');

    }

    public function show($id) {

        $event = Event::findOrFail($id);

        $user = auth()->user();


        $eventOwner = User::where('id', $event->id);

        return view('events.show', ['event' => $event]);
        
    }


 
    public function dashboard() {

        $user = auth()->user();

        $events = $user->events;

        $eventsAsParticipant = $user->eventsAsParticipant;

        return view('events.dashboard', 
            ['events' => $events, 'eventsasparticipant' => $eventsAsParticipant]
        );

    }

  
    public function destroy($id){
        Event::findOrFail($id)->delete();

        return redirect('dashboard');
    }

    
    public function edit($id){

        $event = Event::findOrFail($id);

        return view('events.edit', ['event' => $event]);

    }


    public function update(Request $request) {

        
        Event::findOrFail($request->id)->update($request->all());

        return redirect('/dashboard');
    }

}