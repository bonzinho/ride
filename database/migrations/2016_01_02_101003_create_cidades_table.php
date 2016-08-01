<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cidades', function(Blueprint $table)
		{
			//$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('distrito_id')->unsigned();
			$table->string('cidade', 255);
			$table->timestamps();
		});

		Schema::table('cidades', function($table) {
			
			$table->foreign('distrito_id')->references('id')->on('distritos')->onDelete('cascade');			
				
			
       		
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cidades');
	}

}
