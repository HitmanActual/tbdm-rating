<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Rate::class, function (Faker\Generator $faker) {
    return [
        'rate' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 5),
        'comment' => $faker->text(50),
        'user_id'=>$faker->numberBetween(10,20),
        'object_id'=>$faker->numberBetween(10,20),
        'category_id'=>$faker->numberBetween(10,20),

    ];
});
