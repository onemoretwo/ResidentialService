<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [

        'number' => $faker->numerify("#0#"),
        'floor' => $faker->numberBetween(1,6),
        'available' => ("no")


    ];
});
