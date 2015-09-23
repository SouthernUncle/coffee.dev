<?php

class ReviewFlavorTableSeeder extends Seeder {

	public function run()
	{
		$bitterChoc	 = Flavor::where('name', 'bittersweet chocolate')->firstOrFail();
		$bsugar		 = Flavor::where('name', 'brown sugar')->firstOrFail();
		$cantaloupe	 = Flavor::where('name', 'cantaloupe')->firstOrFail();
		$caramel	 = Flavor::where('name', 'caramel')->firstOrFail();
		$cashew	 	 = Flavor::where('name', 'cashew')->firstOrFail();
		$cherry		 = Flavor::where('name', 'cherry')->firstOrFail();
		$clementine	 = Flavor::where('name', 'clementine')->firstOrFail();
		$cream		 = Flavor::where('name', 'cream')->firstOrFail();
		$darkChoc	 = Flavor::where('name', 'dark chocolate')->firstOrFail();
		$dates	     = Flavor::where('name', 'dried dates')->firstOrFail();
		$dill		 = Flavor::where('name', 'dill')->firstOrFail();
		$grapefruit	 = Flavor::where('name', 'grapefruit')->firstOrFail();
		$greens	 	 = Flavor::where('name', 'leafy greens')->firstOrFail();
		$hazelnut	 = Flavor::where('name', 'hazelnut')->firstOrFail();
		$honeydew	 = Flavor::where('name', 'honeydew')->firstOrFail();
		$mandarin	 = Flavor::where('name', 'mandarin orange')->firstOrFail();
		$mango 		 = Flavor::where('name', 'mango')->firstOrFail();
		$orange		 = Flavor::where('name', 'orange')->firstOrFail();
		$rapple	 	 = Flavor::where('name', 'red apple')->firstOrFail();
		$red_currant = Flavor::where('name', 'red currant')->firstOrFail();
		$scane		 = Flavor::where('name', 'sugar cane')->firstOrFail();
		$sdtomato	 = Flavor::where('name', 'sun-dried tomato')->firstOrFail();
		$strawberry	 = Flavor::where('name', 'strawberry')->firstOrFail();
		$tamarind	 = Flavor::where('name', 'tamarind')->firstOrFail();
		$walnut		 = Flavor::where('name', 'walnut')->firstOrFail();

		$sukeQuto 	= Coffee::where('name', 'Suke Quto')->firstOrFail();
		$kiiAA 		= Coffee::where('name', 'Kii AA')->firstOrFail();
		$santaBarb	= Coffee::where('name', 'Santa Barbara')->firstOrFail();
		$laCruz		= Coffee::where('name', 'La Cruz')->firstOrFail();
		$simi		= Coffee::where('name', 'Similakuta')->firstOrFail();
		$sanAnto	= Coffee::where('name', 'San Antonio')->firstOrFail();
		$laVoz		= Coffee::where('name', 'La Voz')->firstOrFail();
		$idido		= Coffee::where('name', 'Idido')->firstOrFail();
		$santaElena	= Coffee::where('name', 'Santa Elena')->firstOrFail();
		$bonVivant	= Coffee::where('name', 'Bon Vivant')->firstOrFail();

		$r = Review::where('coffee_id', $sukeQuto->id)->firstOrFail();
		$r->reviewFlavors()->attach($dill->id);
		$r->reviewFlavors()->attach($red_currant->id);
		$r->reviewFlavors()->attach($tamarind->id);

		$r = Review::where('coffee_id', $kiiAA->id)->firstOrFail();
		$r->reviewFlavors()->attach($grapefruit->id); 
		$r->reviewFlavors()->attach($strawberry->id);
		$r->reviewFlavors()->attach($sdtomato->id);
		
		$r = Review::where('coffee_id', $santaBarb->id)->firstOrFail();
		$r->reviewFlavors()->attach($darkChoc->id);
		$r->reviewFlavors()->attach($caramel->id);
		$r->reviewFlavors()->attach($cashew->id);

		$r = Review::where('coffee_id', $laCruz->id)->firstOrFail();
		$r->reviewFlavors()->attach($cherry->id); 
		$r->reviewFlavors()->attach($orange->id);
		$r->reviewFlavors()->attach($strawberry->id);	

		$r = Review::where('coffee_id', $simi->id)->firstOrFail();
		$r->reviewFlavors()->attach($honeydew->id);
		$r->reviewFlavors()->attach($cream->id);
		$r->reviewFlavors()->attach($scane->id);

		$r = Review::where('coffee_id', $sanAnto->id)->firstOrFail();
		$r->reviewFlavors()->attach($dates->id);
		$r->reviewFlavors()->attach($bsugar->id);
		$r->reviewFlavors()->attach($hazelnut->id);

		$r = Review::where('coffee_id', $laVoz->id)->firstOrFail();
		$r->reviewFlavors()->attach($rapple->id);
		$r->reviewFlavors()->attach($caramel->id);
		$r->reviewFlavors()->attach($walnut->id);

		$r = Review::where('coffee_id', $idido->id)->firstOrFail();
		$r->reviewFlavors()->attach($greens->id);
		$r->reviewFlavors()->attach($cantaloupe->id);
		$r->reviewFlavors()->attach($clementine->id);

		$r = Review::where('coffee_id', $santaElena->id)->firstOrFail();
		$r->reviewFlavors()->attach($mango->id);
		$r->reviewFlavors()->attach($mandarin->id);
		$r->reviewFlavors()->attach($bitterChoc->id);

		$r = Review::where('coffee_id', $bonVivant->id)->firstOrFail();
		$r->reviewFlavors()->attach($grapefruit->id); 
		$r->reviewFlavors()->attach($scane->id);
		$r->reviewFlavors()->attach($darkChoc->id);
	}
}