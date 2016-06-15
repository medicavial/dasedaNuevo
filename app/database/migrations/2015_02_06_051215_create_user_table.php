<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
        {
            $table->increments('id');
         
            $table->string('name',110);
			$table->string('email')->unique();
			$table->string('username')->unique();
			$table->string('password');
			$table->string('skill');
			$table->boolean('activated')->default(true);
			$table->rememberToken(); //required as of 4.1.28 upgrade for remember me
            
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
		Schema::drop('users');
	}

}
