<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable //implements MustVerifyEmail
{
    public function phrases()
    {
        return $this->hasMany('App\Models\RoadPhrase');
    }

    public function ticketPhrases()
    {
        return $this->hasMany('App\Models\TicketPhrase');
    }

    public function rentPhrases()
    {
        return $this->hasMany('App\Models\RentPhrase');
    }

    public function timePhrases()
    {
        return $this->hasMany('App\Models\TimePhrase');
    }

    public function airportPhrases()
    {
        return $this->hasMany('App\Models\AirportPhrase');
    }
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
