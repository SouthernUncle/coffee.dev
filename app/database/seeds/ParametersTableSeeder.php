<?php

class ParametersTableSeeder extends Seeder {

	public function run()
	{
		$parameter = new Parameter();
                $parameter->review_id       = 1;
                $parameter->grind           = 'medium burr';
                $parameter->water_weight    = 532;
                $parameter->coffee_weight   = 33.2;
                $parameter->brew_time       = 240;
                $parameter->water_temp      = 208;
                $parameter->brewer          = 'Chemex';
                $parameter->method          = '30-second bloom, 16:1 ratio';
                $parameter->roast_date      = '09/10/2015';
                $parameter->save();
	}

}