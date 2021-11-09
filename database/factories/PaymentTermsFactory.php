<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment_terms;
use Faker\Generator as Faker;

$factory->define(Payment_terms::class, function (Faker $faker) {
    return [
        'description' => $faker -> sentence(2, false),
        'deleted'=> 0,
    ];
});
