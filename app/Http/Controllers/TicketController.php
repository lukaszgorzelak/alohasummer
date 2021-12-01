<?php

namespace App\Http\Controllers;
use App\Models\RoadPhrase;
use App\Models\TicketPhrase;
use App\Models\RentPhrase;
use App\Models\TimePhrase;
use App\Models\AirportPhrase;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index() //Wyświetlanie wszystkich rekordów z bazy
    {   
        $phrases = RoadPhrase::all();
        $phrasesTickets = TicketPhrase::all();
        $phrasesRents = RentPhrase::all();
        $phrasesTimes = TimePhrase::all();
        $phrasesAirport = AirportPhrase::all();

        $countRoadPhrase = count($phrases);
        $countTicketPhrase = count($phrasesTickets);
        $countRentPhrase = count($phrasesRents);
        $countTimePhrase = count($phrasesTimes);
        $countAirportPhrase = count($phrasesAirport);

        return view('index',[
            'phrases' => $phrases,
            'tickets' => $phrasesTickets,
            'rents'   => $phrasesRents,
            'times'   => $phrasesTimes,
            'airports'  => $phrasesAirport,
            'countRoadPhrase'  => $countRoadPhrase,
            'countTicketPhrase'  => $countTicketPhrase,
            'countRentPhrase'  => $countRentPhrase,
            'countTimePhrase'  => $countTimePhrase,
            'countAirportPhrase'  => $countAirportPhrase,
         ]);
    }

    public function store(Request $request) //Zapis do bazy nowego rekordu
    {
        $validation = $request->validate([
            'phrase' => 'required',
            'translation' => 'required',
        ]);

       if($validation){
            $ticket = new TicketPhrase();

            $ticket->phrase = $request->phrase;
            $ticket->translation = $request->translation;
            $ticket->user_id = Auth::user()->id;
    
            $ticket->save();
            return redirect()->route('ticket');
       } 
    }

    public function update($id,Request $request) //Edycja rekordu
    {   
       $request->validate([
            'phrase' => 'required',
            'translation' => 'required',
       ]);
       $phrase = TicketPhrase::find($id);

       $phrase->phrase = $request->phrase;
       $phrase->translation = $request->translation;

       $phrase->save();

       return redirect()->route('ticket');
    }

    public function delete($id) //Usuwanie rekordu z bazy
    {
        TicketPhrase::destroy($id);

        return redirect()->route('ticket');
    }
}
