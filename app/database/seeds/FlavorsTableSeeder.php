<?php

class FlavorsTableSeeder extends Seeder {

	public function run()
	{
	// 1-7
		$citrus = [ 'lemon', 'lime', 'grapefruit', 'clementine', 'tangerine', 'mandarin orange', 'orange' ];
	//  8-9
		$apple = [ 'green apple', 'red apple' ];
	// 10-12
		$melon = [ 'watermelon', 'honeydew', 'cantaloupe' ];
	// 13-17
		$grape = [ 'white grape', 'green grape', 'red grape', 'concord grape', 'wine' ];
	// 18-27
		$tropical = [ 'lychee', 'star fruit', 'tamarind', 'passion fruit', 'pineapple', 'mango', 'papaya', 'kiwi', 'banana', 'coconut' ];
	// 28-33
		$stone = [ 'peach', 'nectarine', 'apricot', 'plum', 'cherry', 'black cherry' ];
	// 34-39
		$berry = [ 'cranberry', 'raspberry', 'strawberry', 'blueberry', 'red currant', 'black currant' ];
	// 40-44
		$dried = [ 'golden raisin', 'raisin', 'dried fig', 'dried dates', 'prune' ];
	// 45-50
		$chocolate = [ 'cacao nibs', 'dark chocolate', 'baker\'s chocolate', 'bittersweet chocolate', 'cocoa powder', 'milk chocolate' ];
	// 51-62
		$sugar = [ 'vanilla', 'nougat', 'honey', 'butter', 'cream', 'marshmallow', 'sugar cane', 'brown sugar', 'caramel', 'maple syrup', 'molasses', 'cola' ];
	// 63-68
		$nut = [ 'almond', 'hazelnut', 'pecan', 'cashew', 'peanut', 'walnut' ];
	// 69-75
		$grain = [ 'fresh bread', 'barley', 'wheat', 'rye', 'graham cracker', 'granola', 'sweet bread pastry' ];
	// 75-78
		$roast = [ 'toast', 'burnt sugar', 'smokey', 'carbon' ];
	// 79-87
		$spice = [ 'black pepper', 'white pepper', 'cinnamon', 'coriander', 'ginger', 'nutmeg', 'curry', 'licorice-anise', 'clove' ];
	// 88-92
		$savory = [ 'leathery', 'meat-like', 'soy sauce', 'sun-dried tomato', 'tomato' ];
	// 93-98
		$herb = [ 'bergamot', 'mint', 'sage', 'dill', 'green tea', 'black tea' ];
	// 99-103
		$earthy = [ 'soil', 'fresh wood', 'cedar', 'tobacco', 'hay/straw' ];
	// 104-111
		$vegetal = [ 'grassy', 'snow pea', 'sweet pea', 'mushroom', 'squash', 'green pepper', 'olive', 'leafy greens' ];
	// 112-118
		$floral = [ 'hibiscus', 'rose hips', 'lavender', 'magnolia', 'jasmine honeysuckle', 'orange blossom', 'lemongrass' ];
		
		foreach($citrus as $flavor)
		{
			Flavor::create([
				'category_id' => 1,
				'name' 		  => $flavor,
			]);
		}

		foreach($apple as $flavor)
		{
			Flavor::create([
				'category_id' => 2,
				'name' 		  => $flavor,
			]);
		}

		foreach($melon as $flavor)
		{
			Flavor::create([
				'category_id' => 3,
				'name' 		  => $flavor,
			]);
		}

		foreach($grape as $flavor)
		{
			Flavor::create([
				'category_id' => 4,
				'name' 		  => $flavor,
			]);
		}

		foreach($tropical as $flavor)
		{
			Flavor::create([
				'category_id' => 5,
				'name' 		  => $flavor,
			]);
		}

		foreach($stone as $flavor)
		{
			Flavor::create([
				'category_id' => 6,
				'name' 		  => $flavor,
			]);
		}

		foreach($berry as $flavor)
		{
			Flavor::create([
				'category_id' => 7,
				'name' 		  => $flavor,
			]);
		}

		foreach($dried as $flavor)
		{
			Flavor::create([
				'category_id' => 8,
				'name' 		  => $flavor,
			]);
		}

		foreach($chocolate as $flavor)
		{
			Flavor::create([
				'category_id' => 9,
				'name' 		  => $flavor,
			]);
		}

		foreach($sugar as $flavor)
		{
			Flavor::create([
				'category_id' => 10,
				'name' 		  => $flavor,
			]);
		}

		foreach($nut as $flavor)
		{
			Flavor::create([
				'category_id' => 11,
				'name' 		  => $flavor,
			]);
		}

		foreach($grain as $flavor)
		{
			Flavor::create([
				'category_id' => 12,
				'name' 		  => $flavor,
			]);
		}

		foreach($roast as $flavor)
		{
			Flavor::create([
				'category_id' => 13,
				'name' 		  => $flavor,
			]);
		}

		foreach($spice as $flavor)
		{
			Flavor::create([
				'category_id' => 14,
				'name' 		  => $flavor,
			]);
		}

		foreach($savory as $flavor)
		{
			Flavor::create([
				'category_id' => 15,
				'name' 		  => $flavor,
			]);
		}

		foreach($herb as $flavor)
		{
			Flavor::create([
				'category_id' => 16,
				'name' 		  => $flavor,
			]);
		}

		foreach($earthy as $flavor)
		{
			Flavor::create([
				'category_id' => 17,
				'name' 		  => $flavor,
			]);
		}

		foreach($vegetal as $flavor)
		{
			Flavor::create([
				'category_id' => 18,
				'name' 		  => $flavor,
			]);
		}

		foreach($floral as $flavor)
		{
			Flavor::create([
				'category_id' => 19,
				'name' 		  => $flavor,
			]);
		}
	}
}