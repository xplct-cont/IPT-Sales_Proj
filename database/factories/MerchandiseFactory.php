<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchandise;
use Faker\Generator as Faker;

$factory->define(Merchandise::class, function (Faker $faker) {
    $e_list = ['Redragon', 'Hyper-X', 'Logitech', 'Sony', 'Razer'];
    $x_list = ['H510', 'X-Pro', 'G-Pro', 'S-Pro', 'Barracuda'];
    return [
        'brand_name'=>$e_list[array_rand($e_list)],
        'product_name'=>$x_list[array_rand($x_list)],
        'category_id'=> rand(1, 5),
        'retail_price'=> rand(2, 500),
        'wholesale_price'=> rand(22, 850),
        'unit_id'=> rand(1, 5),
        'wholesale_qty'=> rand(6, 50),
        'qty_stock'=> rand(10, 50),
    ];
});