<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChicahots extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chicahots', function(Blueprint $table){
			$table->increments('id');
			$table->string('titulo', 100)->nullable();
			$table->string('slugHot', 100)->nullable();
			$table->string('img', 100);
			$table->integer('user_id');
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
		Schema::drop('chicahots');
	}

}
