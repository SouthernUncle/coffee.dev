<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([

			'username'     => $_ENV['USER_USERNAME'],
			'email'        => $_ENV['USER_EMAIL'],
			'password'     => $_ENV['USER_PASSWORD'],
			'role' 		   => 'admin',
			'confirmation' => $faker->ean8;
		]);

		$faker = Faker::create();

		foreach(range(1, 7) as $index)
		{
			User::create([
				
				'username'     => $faker->userName,
				'email'        => $faker->freeEmail,
				'password'     => $_ENV['USER_PASSWORD'],
				'role'	       => 'user';
				'confirmation' => null;

			]);
		}

		foreach(range(1, 2) as $index)
		{
			User::create([
				
				'username'     => $faker->userName,
				'email'        => $faker->freeEmail,
				'password'     => $_ENV['USER_PASSWORD'],
				'role'	       => 'top';
				'confirmation' => null;
				
			]);
		}
	}

}