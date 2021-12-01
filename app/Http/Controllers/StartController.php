<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\RoadPhrase;
use App\Models\TicketPhrase;
use App\Models\RentPhrase;
use App\Models\TimePhrase;
use App\Models\AirportPhrase;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index() //Wyświetlanie wszystkich rekordów z bazy
    {
        $phrasesAll = RoadPhrase::all();
        $phrasesTickets = TicketPhrase::all();
        $phrasesRents = RentPhrase::all();
        $phrasesTimes = TimePhrase::all();
        $phrasesAirport = AirportPhrase::all();

        $countRoadPhrase = count($phrasesAll);
        $countTicketPhrase = count($phrasesTickets);
        $countRentPhrase = count($phrasesRents);
        $countTimePhrase = count($phrasesTimes);
        $countAirportPhrase = count($phrasesAirport);

        return view('index',[
            'phrases' => $phrasesAll,
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

    public function edit($id) //Edycja rekordu z bazy
    {
        $phrase = RoadPhrase::find($id);
        
        return redirect()->route('start',['phrase' => $phrase]);

    }

    public function store(Request $request) //Zapis do bazy nowego rekordu
    {
        
        $validation = $request->validate([
            'phrase' => 'required',
            'translation' => 'required',
        ]);

       
       if($validation){
            $phrase = new RoadPhrase();

            $phrase->phrase = $request->phrase;
            $phrase->translation = $request->translation;
            $phrase->user_id = Auth::user()->id;
            $phrase->save();

            return redirect()->route('start');  
       } 
    }

    public function update($id,Request $request) //Edycja rekordu
    {
        $request->validate([
            'phrase' => 'required',
            'translation' => 'required',
        ]);

       $phrase = RoadPhrase::find($id);

       $phrase->phrase = $request->phrase;
       $phrase->translation = $request->translation;

       $phrase->save();
       return redirect()->route('start');
    }

    public function delete($id) //Usuwanie rekordu z bazy
    {
        RoadPhrase::destroy($id);

        return redirect()->route('start');
    }

}
