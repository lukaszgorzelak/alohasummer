<?php

namespace App\Http\Controllers;
use App\Models\RoadPhrase;
use App\Models\TicketPhrase;
use App\Models\RentPhrase;
use App\Models\TimePhrase;
use App\Models\AirportPhrase;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RentController extends Controller
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
            $rent = new RentPhrase();

            $rent->phrase = $request->phrase;
            $rent->translation = $request->translation;
            $rent->user_id = Auth::user()->id;
    
            $rent->save();
            return redirect()->route('rent');
       } 
    }

    public function update($id,Request $request) //Edycja rekordu
    {
       $request->validate([
            'phrase' => 'required',
            'translation' => 'required',
       ]);
       $phrase = RentPhrase::find($id);

       $phrase->phrase = $request->phrase;
       $phrase->translation = $request->translation;

       $phrase->save();

       return redirect()->route('rent');
    }

    public function delete($id) //Usuwanie rekordu z bazy
    {
        RentPhrase::destroy($id);

        return redirect()->route('start');
    }
}
