<?php

namespace App\Http\Controllers;
use App\Models\RoadPhrase;
use App\Models\TicketPhrase;
use App\Models\RentPhrase;
use App\Models\TimePhrase;
use App\Models\AirportPhrase;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    
    public function profile() 
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

        $users = User::all();
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;

        return view('profile',[
            'user_name' => $user_name,
            'user_email'=> $user_email,
            'users'     => $users,
            'phrases'   => $phrases,
            'tickets'   => $phrasesTickets,
            'rents'     => $phrasesRents,
            'times'     => $phrasesTimes,
            'airports'  => $phrasesAirport,
            'countRoadPhrase'   => $countRoadPhrase,
            'countTicketPhrase' => $countTicketPhrase,
            'countRentPhrase'   => $countRentPhrase,
            'countTimePhrase'   => $countTimePhrase,
            'countAirportPhrase'=> $countAirportPhrase,
         ]);
    }
}
