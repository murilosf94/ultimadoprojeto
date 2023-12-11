<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;  
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Food;
use Carbon\carbon;


class EventController extends Controller
{


    public function index(Event $events) {

        $events = $events -> all();
    
        return view('index',['events' => $events]);

    }

    public function create(Food $pacote){
        $pacote=$pacote->all();
        return view('events.create', compact ('pacote'));
    }

    public function store(Request $request) {

    
        // Verificar a disponibilidade no banco de dados
        $date = $request->date;
    
        $reservaExistente = Event::where('date', $date)->exists();
    
        if ($reservaExistente) {
            // Reserva já existente para a data selecionada
            return redirect()->back()->withErrors(['date' => "Desculpe, a data " . old('date') . " selecionada já está reservada para um evento."]);
        }
    

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

        $item = $event->items;

        $user = auth()->user();


        $eventOwner = User::where('id', $event->id);

        return view('events.show', ['event' => $event, 'item' => $item]);
        
    }


 
    public function dashboard(Event $events) {

        $events=$events->all();

        return view('dashboard', 
            ['events' => $events]
        );

    }

  
    public function destroy($id){
        Event::findOrFail($id)->delete();

        return redirect('dashboard');
    }

    
    public function edit($id, Food $pacote){

        $pacote=$pacote->all();
        $event = Event::findOrFail($id);
        $event->date = \Carbon\Carbon::parse($event->date)->format('Y-m-d');

        return view('events.edit', ['event' => $event, 'pacote' => $pacote]);

    }


    public function update(Request $request, Event $event) {
        // Verificar a disponibilidade no banco de dados apenas se a data for alterada
        if ($request->date != $event->date) {
            $date = $request->date;
            $reservaExistente = Event::where('date', $date)->exists();
    
            if ($reservaExistente) {
                // Reserva já existente para a data selecionada
                return redirect()->back()->withErrors(['date' => "Desculpe, a data " . $date . " selecionada já está reservada para um evento."]);
            }
        }
    
        Event::findOrFail($request->id)->update($request->all());
    
        return redirect('/dashboard');
    }

}