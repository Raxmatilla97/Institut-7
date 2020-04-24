<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PosterCategory;
use Faker\Generator as Faker;

$factory->define(PosterCategory::class, function (Faker $faker) {
  $name = $faker->sentence($nbWords = 6, $variableNbWords = true);
    $slug = Str::slug($name);

    return [
         'name' => $name,
        'slug' => $slug,
     
        'img' => $faker->randomElement([
            'storage/photos/4/1.jpg',
            'storage/photos/4/2.jpg',
            'storage/photos/4/3.jpg',
            'storage/photos/4/4.jpg',
            'storage/photos/4/5.jpg',
            'storage/photos/4/6.jpg',
            ]),
    ];
});
