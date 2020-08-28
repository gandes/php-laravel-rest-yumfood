<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dish;
use Faker\Generator as Faker;

$factory->define(Dish::class, function (Faker $faker) {
    $faker = \Faker\Factory::create();
    $faker->addProvider(new \FakerRestaurant\Provider\id_ID\Restaurant($faker));
    
    $randomVendors = \App\Vendor::get();
    $randomVendor = $faker->randomElement($randomVendors);
    return [
        'vendor_id'    => $randomVendor->id,
        'name'         => $faker->foodName(),
        'price'        => $faker->numberBetween(25000, 100000),
    ];
});
