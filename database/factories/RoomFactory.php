<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [

        'building_id' => $faker->randomDigit,
        'type_id' => $faker->randomDigit,
        'number' => $faker->randomDigit,
        'floor' => $faker->randomDigit,
        'available' => $faker->word("null")


    ];
});
