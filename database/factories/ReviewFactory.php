<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [

    	'product_id' => function (){

    	    return factory(\App\Model\Product::class)->create()->id;

	    },
	    'customer' => $faker->firstNameMale,
	    'review' => $faker->text,
	    'star' => $faker->randomDigit,
    ];
});
