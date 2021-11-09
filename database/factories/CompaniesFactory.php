<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Companies;
use Faker\Generator as Faker;

$factory->define(Companies::class, function (Faker $faker) {
    return [
        'name' => $faker -> name,
        'address'=> $faker -> address,
        'city' => $faker -> city,
        'cif' => $faker -> numberBetween(1000000000,9999999999),
        'email' => $faker -> email,
        'phone' => '639381852',
        'del_term_id' => \App\Delivery_terms::all()->random()->id,
        'transport_id' => \App\Transports::all()->random()->id,
        'payment_term_id' => \App\Payment_terms::all()->random()->id,
        'bank_entity_id' => \App\Bank_Entity::all()->random()->id,
        'discount_id' => \App\Discount::all()->random()->id,
        'deleted' => 0,
    ];
});

