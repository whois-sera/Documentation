<?php

// Location : database/factories/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

/**
 * Define the defaults fiels for a project. This file is called by the seeder
 * client_id foreign key will be overide by createMany in the Clients seeder
 */
$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'client_id' => $faker->randomDigit
    ];
});
