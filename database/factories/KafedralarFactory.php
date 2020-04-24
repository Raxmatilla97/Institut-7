<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kafedralar;
use Faker\Generator as Faker;

$factory->define(Kafedralar::class, function (Faker $faker) {
    $name =  $faker->sentence($nbWords = 6, $variableNbWords = true);  // Random task title
    $slug = Str::slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
    ];
});
