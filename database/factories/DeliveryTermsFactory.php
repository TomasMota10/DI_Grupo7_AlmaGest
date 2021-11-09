<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Delivery_terms;
use Faker\Generator as Faker;

$factory->define(Delivery_terms::class, function (Faker $faker) {
    return [
        'description' => $faker -> sentence(2, false),
        'deleted' => 0,
    ];
});
