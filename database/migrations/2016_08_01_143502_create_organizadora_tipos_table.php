<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizadoraTiposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizadora_tipos', function(Blueprint $table)
		{
			$table->integer('organizadora_id')->unsigned();
			$table->integer('evento_tipo')->unsigned();
			$table->timestamps();
		});

		Schema::table('organizadora_tipos', function($table) {
			
			$table->foreign('organizadora_id')->references('id')->on('organizadoras')->onDelete('cascade');			
			$table->foreign('evento_tipo')->references('id')->on('evento_tipos')->onDelete('cascade');			
			
       		
   		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('organizadora_tipos');
	}

}
