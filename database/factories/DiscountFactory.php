<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Discount;
use Faker\Generator as Faker;

$factory->define(Discount::class, function (Faker $faker) {
    return [
        'name' => $faker -> name,
        'discount' => $faker -> numberBetween(5,20),
        'deleted' => 0,
    ];
});
