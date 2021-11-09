<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transports;
use Faker\Generator as Faker;

$factory->define(Transports::class, function (Faker $faker) {
    return [
        'min' => $faker -> numberBetween(5,10),
        'max' => $faker -> numberBetween(5,10),
        'price' => $faker -> numberBetween(5,10),
        'deleted' => 0,
    ];
});
