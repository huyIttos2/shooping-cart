<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'imagePath' =>$faker->imageUrl(),
        'title'=>$faker->title,
        'description'=>$faker->text,
        'price'=>$faker->randomNumber()
    ];
});
