<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Unit;
use Faker\Generator as Faker;

$factory->define(Unit::class, function (Faker $faker) {
    return [
        'unit_type'=>$this->faker->word,
        'description'=>$this->faker->word,
    ];
});