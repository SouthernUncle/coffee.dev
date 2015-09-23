<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoffeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coffees', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->integer('region_id')->unsigned();
			$table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');

			$table->integer('roaster_id')->unsigned();
			$table->foreign('roaster_id')->references('id')->on('roasters')->onDelete('cascade');

			$table->string('name');

			$table->string('img_url')->nullable();
			$table->string('url')->nullable();
			
			$table->string('process')->nullable();
			$table->string('elevation')->nullable();

			$table->text('roasters_description');

			$table->boolean('active');

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

		Schema::table('coffee', function(Blueprint $table) {
			$table->dropForeign('coffee_roaster_id_foreign');
			$table->dropForeign('coffee_region_id_foreign');
			$table->dropForeign('coffee_user_id_foreign');
		});

		Schema::drop('coffees');
	}

}
