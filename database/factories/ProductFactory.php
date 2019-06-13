<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [

    	'name' => $faker->name,
    	'detail' => $faker->sentence,
    	'price' => $faker->randomFloat(null,10,1000),
    	'stock' => $faker->randomDigit(10,100),
	    'discount' => $faker->randomFloat(null,10,1000),
    ];
});
