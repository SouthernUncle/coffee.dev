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

		DB::table('invitations')->delete();
		DB::table('review_flavor')->delete();
		DB::table('parameters')->delete();
		DB::table('reviews')->delete();
		DB::table('coffees')->delete();
		DB::table('roasters')->delete();
		DB::table('users')->delete();
		DB::table('roles')->delete();
		DB::table('flavors')->delete();
		DB::table('flavor_categories')->delete();
		DB::table('regions')->delete();


		$this->call('RegionsTableSeeder');
		$this->call('FlavorCategoriesTableSeeder');
		$this->call('FlavorsTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('RoastersTableSeeder');
		$this->call('CoffeesTableSeeder');
		$this->call('ReviewsTableSeeder');
		$this->call('ParametersTableSeeder');
		$this->call('ReviewFlavorTableSeeder');
		$this->call('InvitationsTableSeeder');
	}

}
