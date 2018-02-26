<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
		'remember_token' => str_random(10),
	];
});

//Hostel
$factory->define(App\Hostel::class, function (Faker $faker) {
	return [
		'name' => $faker->company,
		'ownerID' => "UN/".$faker->numberBetween(1, 100000)."/18",
		'description' => $faker->text,
		'totalRooms' => $faker->numberBetween(1, 50),
		'latitude' => $faker->latitude,
		'longitude' => $faker->longitude,
		'price' => $faker->numberBetween(10000, 24000),
		'contact' => $faker->phoneNumber,
		'deposit' => $faker->numberBetween(2000, 8000),
		'account' => $faker->creditCardNumber,
		'bookedUnits' => $faker->numberBetween(1, 10),
	];
});

//Admin
$factory->define(App\Admin::class, function (Faker $faker) {
	$password = '123456';

	return [
		'username' => 'Artisan',
		'email' => $faker->email,
		'password' => bcrypt($password)
	];
});

// Rooms
$factory->define(App\Room::class, function (Faker $faker) {

return [
	'hostel_id' => function () {
		return factory(App\Hostel::class)->create()->id;
	},
	'roomType' => 'Single',
	'roomCategory' => 'Single',
	'electricityBill' => 'Paid by the student',
	'waterBill' => 'Paid by the landlord'
];
});


