<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    $filepath = storage_path('images');

    if (!File::exists($filepath)) {
        File::makeDirectory($filepath);
    }
    return [
        'name' => $faker->company,
        'address' => $faker->streetAddress,
        'phone' => $faker->phoneNumber,
        'picture' =>  $faker->image('public/images', 640, 480, null, false)

    ];
});
