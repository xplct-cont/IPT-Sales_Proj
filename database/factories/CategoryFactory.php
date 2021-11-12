<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    
    return [
        'category'=>$this->faker->word,
        'description'=>$this->faker->word,
    ];
});