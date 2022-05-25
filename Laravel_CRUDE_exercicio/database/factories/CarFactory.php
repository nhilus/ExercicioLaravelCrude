<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand_id'=> rand(1,30),
        'registration'=> $faker->bothify('##-??-##'),
        'year_of_registration'=> $faker-> dateTime,
        'color'=> $faker -> colorName,
    ];
});
