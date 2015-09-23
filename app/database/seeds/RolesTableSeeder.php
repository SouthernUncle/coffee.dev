<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		$role = new Role();
        $role->name = "Admin";
        $role->save();

        $role = new Role();
        $role->name = "User";
        $role->save();
	}

}