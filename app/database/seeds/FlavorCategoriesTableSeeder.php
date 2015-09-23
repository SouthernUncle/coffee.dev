<?php

class FlavorCategoriesTableSeeder extends Seeder {

	public function run()
	{
		$flavors = [
			'citrus', 'apple', 'melon',
			'grape', 'tropical fruit',
			'stone fruit', 'berry',
			'dried fruit', 'chocolate',
			'sugar', 'nut', 'grain', 'roast',
			'spice', 'savory', 'herb',
			'earthy', 'vegetal', 'floral' 
		];

		foreach($flavors as $flavor)
		{
			FlavorCategory::create([
				'name' => $flavor,
			]);
		}
	}

}