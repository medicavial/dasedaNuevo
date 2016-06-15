<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provedores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre')->unique();
			$table->string('contacto');
			$table->string('telefono')->nullable();
			$table->string('rfc')->nullable();
			$table->string('email')->nullable();
			$table->string('direccion')->nullable();
			$table->string('descripcion')->nullable();
			$table->boolean('activated')->default(true);
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('provedores');
	}

}
