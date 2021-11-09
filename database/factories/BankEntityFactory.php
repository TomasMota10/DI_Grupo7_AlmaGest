<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bank_entity;
use Faker\Generator as Faker;

$factory->define(Bank_entity::class, function (Faker $faker) {
    return [
        'name' => $faker -> name,
        'ccc' =>  '12345678901234567890123',
        'deleted'=> 0,
    ];
});
