<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\User::class, 10)->create();
        factory(App\Models\RoadPhrase::class, 12)->create();
        factory(App\Models\TicketPhrase::class, 12)->create();
        factory(App\Models\RentPhrase::class, 12)->create();
        factory(App\Models\TimePhrase::class, 12)->create();
        factory(App\Models\AirportPhrase::class, 12)->create();
    }
}
