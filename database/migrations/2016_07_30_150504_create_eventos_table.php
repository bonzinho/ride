<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function(Blueprint $table)
		{
			//$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('nome', 255);
			$table->integer('organizadora_id')->unsigned();
			$table->date('data_inicio');
			$table->date('data_fim');
			$table->string('local', 255);
			$table->text('descricao');
			$table->string('capa', 255);
			$table->string('cartaz', 255);
			$table->enum('estado', array('Ativo', 'Inativo', 'Cancelado'));
			$table->integer('tipo_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('eventos', function($table) {
			$table->foreign('organizadora_id')->references('id')->on('organizadoras')->onDelete('cascade');
			$table->foreign('tipo_id')->references('id')->on('evento_tipos')->onDelete('cascade');			
				
       		
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eventos');
	}

}
