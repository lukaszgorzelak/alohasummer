<?php

namespace App\Http\Controllers;
use App\Models\RoadPhrase;
use App\Models\TicketPhrase;
use App\Models\RentPhrase;
use App\Models\TimePhrase;
use App\Models\AirportPhrase;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AirportController extends Controller
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
            'phrases'   => $phrases,
            'tickets'   => $phrasesTickets,
            'rents'     => $phrasesRents,
            'times'     => $phrasesTimes,
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
            $airport = new AirportPhrase();
            
            $airport->phrase = $request->phrase;
            $airport->translation = $request->translation;
            $airport->user_id = Auth::user()->id;

            $airport->save();
            return redirect()->route('airport');
       } 
    }

    public function update($id,Request $request) //Edycja rekordu
    {
       $request->validate([
            'phrase' => 'required',
            'translation' => 'required',
       ]);
       $airport = AirportPhrase::find($id);

       $airport->phrase = $request->phrase;
       $airport->translation = $request->translation;

       $airport->save();

       return redirect()->route('airport');
    }

    public function delete($id) //Usuwanie rekordu z bazy
    {
        AirportPhrase::destroy($id);

        return redirect()->route('start');
    }
}
