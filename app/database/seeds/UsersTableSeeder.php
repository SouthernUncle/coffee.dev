<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([

			'username'      => $_ENV['USER_USERNAME'],
			'email'         => $_ENV['USER_EMAIL'],
			'password'      => $_ENV['USER_PASSWORD'],
			'role_id'	    => 1,
			'roast_pref'	=> 5,
			'acid_pref'		=> 6,
			'body_pref'		=> 7
		]);

		$faker = Faker::create();

		foreach(range(1, 9) as $index)
		{
			User::create([
				
				'username'      => $faker->userName,
				'email'         => $faker->freeEmail,
				'password'      => $_ENV['USER_PASSWORD'],
				'role_id'		=> 2,
				'roast_pref'	=> mt_rand(1,10),
				'acid_pref'		=> mt_rand(1,10),
				'body_pref'		=> mt_rand(1,10)
			]);
		}
	}
}