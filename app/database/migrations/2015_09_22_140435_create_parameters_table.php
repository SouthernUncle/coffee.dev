<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParametersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parameters', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('review_id')->unsigned();
			$table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');
			
			$table->string('grind');
			$table->float('water_weight', 6, 2);
			$table->float('coffee_weight', 5, 2);
			$table->integer('brew_time');
			$table->integer('water_temp');
			$table->string('brewer');
			$table->text('method');
			$table->date('roast_date');

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parameters', function(Blueprint $table)
		{
			$table->dropForeign('parameters_review_id_foreign');
		});
		
		Schema::drop('parameters');
	}

}
