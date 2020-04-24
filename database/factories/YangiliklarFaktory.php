<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use App\Kafedralar;
use App\ArticleCategory;
use Faker\Generator as Faker;



$factory->define(Article::class, function (Faker $faker) {
   $title =  $faker->sentence($nbWords = 6, $variableNbWords = true);  // Random task title
    $slug = Str::slug($title);
    
    return [
        'title' => $title,
        'description' => $faker->text(), // Random task description
        'image' => $faker->randomElement([
        'storage/photos/4/1.jpg',
        'storage/photos/4/2.jpg',
        'storage/photos/4/3.jpg',
        'storage/photos/4/4.jpg',
        'storage/photos/4/5.jpg',
        'storage/photos/4/news.png',
        ]),
        'active' => $faker->randomElement(['0','1']),
        'tasdiq' => $faker->randomElement(['0','1']),
        'kafedra_id' => Kafedralar::all()->random()->id,
        
        'user_id' => User::all()->random()->id,
        'category_id' => ArticleCategory::all()->random()->id,
        'slug' => $slug

    ];
   
});
