<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHojas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hojas', function(Blueprint $table){
			$table->increments('id');
			$table->string('titulo', 80);
			$table->integer('revista_id')->unsigned();
			$table->foreign('revista_id')
      			->references('id')->on('revistas')
      			->onDelete('cascade');
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
		Schema::drop('hojas');
	}

}
