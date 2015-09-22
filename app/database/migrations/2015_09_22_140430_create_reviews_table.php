<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('coffee_id')->unsigned()->index();
			$table->foreign('coffee_id')->references('id')->on('coffees')->onDelete('cascade');

			$table->integer('roaster_id')->unsigned()->index();
			$table->foreign('roaster_id')->references('id')->on('roasters')->onDelete('cascade');

			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->text('review');

			$table->float('aroma', 2, 1);
			$table->float('flavor', 2, 1);
			$table->float('aftertaste', 2, 1);
			$table->float('balance', 2, 1);
			$table->float('aroma', 2, 1);

			$table->float('roast', 2, 1)->nullable();
			$table->float('body', 2, 1)->nullable();
			$table->float('acidity', 2, 1)->nullable();
			
			$table->float('price', 3, 2)->nullable();
			$table->tinyint('bag_size_oz', 4)->nullable();

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
		Schema::table('reviews', function(Blueprint $table)
		{
			$table->dropForeign('reviews_coffee_id_foreign');
			$table->dropForeign('reviews_roaster_id_foreign');
			$table->dropForeign('reviews_user_id_foreign');
		});

		Schema::drop('reviews');
	}

}