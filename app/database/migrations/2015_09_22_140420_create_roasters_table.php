<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoastersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roasters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->string('name');

			$table->string('address');
			$table->string('city');
			$table->string('state');

			$table->string('img_url');
			$table->string('url');
			$table->text('description');

			$table->string('twitter');
			$table->string('facebook');
			$table->string('instagram');

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
		Schema::table('roaster_user', function(Blueprint $table) {
			$table->dropForeign('roaster_user_user_id_foreign');
		});
		Schema::drop('roasters');
	}

}
