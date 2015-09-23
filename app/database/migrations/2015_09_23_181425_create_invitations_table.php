<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvitationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invitations', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->string('email')->unique();
			$table->string('confirmation');

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
		Schema::table('invitations', function(Blueprint $table)
		{
			$table->dropForeign('invitations_user_id_foreign');
		});
<<<<<<< HEAD

=======
>>>>>>> a30721dba0c45d9238f9ff7ae5d6bbec7ce9d284
		Schema::drop('invitations');
	}

}
