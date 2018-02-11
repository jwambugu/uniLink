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
	$factory->define(App\Hostel::class, function (Faker $faker) {
		return [
			'name' => $faker->company,
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
