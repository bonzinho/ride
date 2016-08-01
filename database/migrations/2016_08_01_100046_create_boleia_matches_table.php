<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoleiaMatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boleia_matches', function(Blueprint $table)
		{
			//$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('utilizador_id')->unsigned();
			$table->integer('numero_pessoas');
			$table->text('notas');
			$table->enum('estado', array('Em análise', 'Não aceite', 'Aceite'));
			$table->timestamps();
		});

		Schema::table('boleia_matches', function($table) {
			
			$table->foreign('utilizador_id')->references('id')->on('users')->onDelete('cascade');			
			
       		
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('boleia_matches');
	}

}
