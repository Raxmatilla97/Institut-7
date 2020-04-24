<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permission;
use Faker\Generator as Faker;

$factory->define(Permission::class, function (Faker $faker) {
    $name =  $faker->sentence($nbWords = 2, $variableNbWords = true);  // Random task title
    $slug = Str::slug($name);
    return [
        'prem_name' => $name,
        'slug' => $slug,
    ];
});
