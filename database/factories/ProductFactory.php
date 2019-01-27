<?php

use Faker\Generator as Faker;

$factory->define(App\products::class, function (Faker $faker) {
    return [
        'slug' => $faker->text($maxNbChars = 10),
        'code' => $faker->text($maxNbChars = 10),
        'name' => $faker->text($maxNbChars = 10),
        'description' => $faker->text($maxNbChars = 20),
 		'sale_price' => 300000000,
		'category_id' => 1,
		'view_count' => 0
    ];
});
