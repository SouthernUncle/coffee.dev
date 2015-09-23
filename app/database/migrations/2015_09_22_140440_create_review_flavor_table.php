<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewFlavorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('review_flavor', function(Blueprint $table)
		{
			$table->integer('review_id')->unsigned();
			$table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');

			$table->integer('flavor_id')->unsigned();
			$table->foreign('flavor_id')->references('id')->on('flavors')->onDelete('cascade');

			$table->primary(array('review_id', 'flavor_id'));

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
		Schema::table('review_flavor', function(Blueprint $table)
		{
			$table->dropForeign('review_flavor_flavor_id_foreign');
			$table->dropForeign('review_flavor_review_id_foreign');
		});

		Schema::drop('review_flavor');
	}

}
