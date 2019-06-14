<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Review;
use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [

    	'product_id' => function (){

    	    return Product::all()->random();

	    },
	    'customer' => $faker->firstNameMale,
	    'review' => $faker->text,
	    'star' => $faker->randomDigit,
    ];
});
