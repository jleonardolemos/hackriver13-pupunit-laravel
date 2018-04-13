<?php

use Faker\Generator as Faker;

$factory->define(App\Pokemon::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph()
    ];
});
