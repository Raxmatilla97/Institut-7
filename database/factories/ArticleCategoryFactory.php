<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticleCategory;
use Faker\Generator as Faker;

$factory->define(ArticleCategory::class, function (Faker $faker) {
    $name =  $faker->sentence($nbWords = 6, $variableNbWords = true);  // Random task title
    $slug = Str::slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
        'active' => $faker->randomElement(['0','1']),
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
