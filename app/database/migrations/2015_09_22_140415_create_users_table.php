<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('role_id')->unsigned();
			$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

			$table->string('email')->unique();
			$table->string('username')->unique();
			$table->string('password');
			$table->string('img_url')->nullable();
			$table->float('roast_pref', 3, 1);
			$table->float('acid_pref', 3, 1);
			$table->float('body_pref', 3, 1);

			$table->rememberToken();

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
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_role_id_foreign');
		});
		Schema::drop('users');
	}

}
