<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    $name =  $faker->sentence($nbWords = 2, $variableNbWords = true);  // Random task title
    $slug = Str::slug($name);
    return [
        'role_name' => $name,
        'slug' => $slug,
    ];
});
