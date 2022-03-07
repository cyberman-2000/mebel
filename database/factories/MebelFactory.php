<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mebel;
use Faker\Generator as Faker;

$factory->define(Mebel::class, function (Faker $faker) {
    return [
        'mebel_name'=>$faker->name,
        'mebel_cat'=>$faker->numberBetween(1,7),
        'mebel_price'=>$faker->numberBetween(1000000,30000000),
        'about'=>$faker->word(60,true),
        'img'=>$faker->image('public/assets/img',640,480, null, false),
        'width'=>$faker->numberBetween(300,4000),
        'height'=>$faker->numberBetween(300,4000),
        'mebel_type'=>$faker->numberBetween(1,9),
        'created_at'=>$faker->dateTime(),
        'updated_at'=>$faker->dateTime(),
    ];
});
