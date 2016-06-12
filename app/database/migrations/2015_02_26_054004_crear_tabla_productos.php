<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProductos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo')->unique();
			$table->string('codigobarras');
			$table->decimal('costo', 10, 2);
			$table->decimal('venta', 10, 2);
			$table->integer('existencia');
			$table->string('titulo');
			$table->longText('descripcion1');
			$table->longText('descripcion2');
			$table->boolean('activated')->default(true);
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->integer('brand_id')->unsigned();
			$table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
			$table->integer('provider_id')->unsigned();
			$table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
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
		Schema::drop('products');
	}

}
