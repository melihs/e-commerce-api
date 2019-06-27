<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [

    	'user_id' => function () {
    	    return User::all()->random();
	    },
    	'name' => $faker->name,
    	'detail' => $faker->sentence,
    	'price' => $faker->randomFloat(null,10,1000),
    	'stock' => $faker->randomDigit(10,100),
	    'discount' => $faker->randomDigit(0,100),
    ];
});
