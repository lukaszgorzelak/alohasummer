<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId) 
    {
        $phrases = User::findOrFail($userId)->phrases;
        $tickets = User::findOrFail($userId)->ticketPhrases;
        $rents = User::findOrFail($userId)->rentPhrases;
        $times = User::findOrFail($userId)->timePhrases;
        $airports = User::findOrFail($userId)->airportPhrases;
  
        $countRoadPhrase = count($phrases);
        $countTicketPhrase = count($tickets);
        $countRentPhrase = count($rents);
        $countTimePhrase = count($times);
        $countAirportPhrase = count($airports);

        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;
        $user_id = Auth::user()->id;

        return view('profile',[
            'phrases'           => $phrases,
            'countRoadPhrase'   => $countRoadPhrase,
            'tickets'           => $tickets,
            'countTicketPhrase' => $countTicketPhrase,
            'rents'             => $rents,
            'countRentPhrase'   => $countRentPhrase,
            'times'             => $times,
            'countTimePhrase'   => $countTimePhrase,
            'airports'          => $airports,
            'countAirportPhrase'=> $countAirportPhrase,
            'user_name'         => $user_name,
            'user_email'        => $user_email,
            'user_id'           => $user_id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
