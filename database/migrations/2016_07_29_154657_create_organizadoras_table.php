<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizadorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizadoras', function(Blueprint $table)
		{
			//$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('nome', 255);
			$table->integer('distrito_id')->unsigned();
			$table->text('descricao');
			$table->string('email', 255);
			$table->string('telefone', 20);
			$table->string('logotipo', 255);
			$table->enum('estado', array('Ativo', 'Inativo', 'Cancelado'));
			//$table->integer('tipo_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('organizadoras', function($table) {
			$table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade');			
			//$table->foreign('tipo_id')->references('id')->on('evento_tipos')->onDelete('cascade');
			
       		
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('organizadoras');
	}

}
