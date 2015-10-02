<?php

class ParametersTableSeeder extends Seeder {

	public function run()
	{
		$parameter = new Parameter();
                $parameter->review_id       = 1;
                $parameter->grind           = 'Medium Coarse';
                $parameter->water_weight    = 532;
                $parameter->coffee_weight   = 33.2;
                $parameter->brew_time       = 240;
                $parameter->water_temp      = 208;
                $parameter->brewer          = 'Chemex';
                $parameter->method          = '45 second bloom. Slow, steady pour til target weight';
                $parameter->roast_date      = '2015-09-10';
                $parameter->save();
	}

}