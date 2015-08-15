<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnunciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//expiry_date
		Schema::create('anuncios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('photo', 100)->nullable();
			$table->date('expiry_date');
			$table->enum('position', array('titulo', 'aside','show','middle','magazine'));
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
		Schema::drop('anuncios');
	}

}
