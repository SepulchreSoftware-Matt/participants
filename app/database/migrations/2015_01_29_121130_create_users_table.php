<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// build the table
		Schema::create('users', function($table)
		{
		    $table->increments('id');
		    $table->string('uid', 20);
		    $table->text('name');
		    $table->text('email');
		    $table->integer('role_id');
		    $table->boolean('active')->default(1);
		    $table->timestamps();
		    $table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop the table
		Schema::drop('users');
	}

}
