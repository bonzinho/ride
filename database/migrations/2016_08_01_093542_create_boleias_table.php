<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoleiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boleias', function(Blueprint $table)
		{
			//$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('utilizador_id')->unsigned();
			$table->integer('evento_id')->unsigned();
			$table->time('hora_ida');
			$table->date('data_ida');
			$table->time('hora_vinda');
			$table->date('data_vinda');
			$table->integer('lugares_disponiveis');
			$table->decimal('preco', 4,2);
			$table->enum('boleia_estado', array('Ativo', 'Inativo', 'Cancelado', 'Match'));
			$table->integer('zona_embarque')->unsigned();
			$table->integer('zona_desembarque')->unsigned();
			$table->timestamps();
		});

		Schema::table('boleias', function($table) {
			$table->foreign('utilizador_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
			$table->foreign('zona_embarque')->references('id')->on('cidades')->onDelete('cascade');
			$table->foreign('zona_desembarque')->references('id')->on('cidades')->onDelete('cascade');		
			
			
       		
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('boleias');
	}

}
