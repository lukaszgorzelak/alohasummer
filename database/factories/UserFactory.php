<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\RoadPhrase;
use App\Models\TicketPhrase;
use App\Models\RentPhrase;
use App\Models\TimePhrase;
use App\Models\AirportPhrase;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(RoadPhrase::class, function (Faker $faker) {
    return [
        'phrase' => $faker->paragraph(random_int(3, 5)),
        'translation' => $faker->sentence,
        'user_id' => App\User::all()->random()->id,
    ];
});

$factory->define(TicketPhrase::class, function (Faker $faker) {
    return [
        'phrase' => $faker->paragraph(random_int(3, 5)),
        'translation' => $faker->sentence,
        'user_id' => App\User::all()->random()->id,
    ];
});

$factory->define(RentPhrase::class, function (Faker $faker) {
    return [
        'phrase' => $faker->paragraph(random_int(3, 5)),
        'translation' => $faker->sentence,
        'user_id' => App\User::all()->random()->id,
    ];
});

$factory->define(TimePhrase::class, function (Faker $faker) {
    return [
        'phrase' => $faker->paragraph(random_int(3, 5)),
        'translation' => $faker->sentence,
        'user_id' => App\User::all()->random()->id,
    ];
});

$factory->define(AirportPhrase::class, function (Faker $faker) {
    return [
        'phrase' => $faker->paragraph(random_int(3, 5)),
        'translation' => $faker->sentence,
        'user_id' => App\User::all()->random()->id,
    ];
});
