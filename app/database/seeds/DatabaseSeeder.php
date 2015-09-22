<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('RegionsTableSeeder');
		$this->call('FlavorCategoriesTableSeeder');
		$this->call('FlavorsTableSeeder');
		
		$this->call('UsersTableSeeder');
		$this->call('RoastersTableSeeder');
		$this->call('CoffeesTableSeeder');
		$this->call('ReviewsTableSeeder');
		$this->call('ParametersTableSeeder');
		$this->call('ReviewFlavorTableSeeder');
	}

}
