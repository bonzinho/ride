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
		Schema::create('users', function(Blueprint $table)
		{
			//$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('telefone', 20);			
			$table->integer('cidade_id')->unsigned();			
			$table->enum('estado', array('Ativo', 'Inativo', 'Cancelado'));
			$table->enum('nivel', array('Admin', 'Utilizador', 'Organizadora'));
			$table->rememberToken();
			$table->timestamps();
		});

		Schema::table('users', function($table) {				
			$table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');
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
