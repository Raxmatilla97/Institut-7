<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserRole;
use App\User;
use App\Role;
use Faker\Generator as Faker;

$factory->define(UserRole::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'role_id' => Role::all()->random()->id,
    ];
});
