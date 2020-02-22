<?php

// Location : database/factories/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

/**
 * Define the defaults fiels for a client. This file is called by the seeder.
 */
$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->company
    ];
});
