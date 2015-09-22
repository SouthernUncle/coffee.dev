<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFlavorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flavors', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer->('cagetory_id')->unsigned()->index();
			$table->foreign('cagetory_id')->references('id')->on('flavor_categories')->onDelete('cascade');

			$table->string('name');
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
		Schema::table('flavors', function(Blueprint $table)
		{
			$table->dropForeign('flavors_category_id_foreign');
		});

		Schema::drop('flavors');
	}

}
