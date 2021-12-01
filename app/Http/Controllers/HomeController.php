<?php

namespace App\Http\Controllers;
use App\Models\RoadPhrase;
use App\Models\TicketPhrase;
use App\Models\RentPhrase;
use App\Models\TimePhrase;
use App\Models\AirportPhrase;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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
}
