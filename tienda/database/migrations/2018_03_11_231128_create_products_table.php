<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateProductsTable extends Migration {

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
			$table->string('nombre', 255);
			$table->string('direccion');
			$table->integer('cantidad');
			$table->string('tipo');
			$table->string('material');
			$table->string('alto');
			$table->string('ancho');
			$table->string('profundidad');
			$table->string('color', 30);
			$table->decimal('peso');
			$table->string('descripcion');
			$table->decimal('precio');
			$table->string('imagen');
			$table->boolean('visible');
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
