<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImgs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imgs', function(Blueprint $table){
			$table->increments('id');
			//$table->string('mini', 100)->unique();
			$table->string('imagen', 100)->nullable()->unique();
			//$table->string('retina', 100)->unique();
			$table->integer('post_id');
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
		Schema::drop('imgs');
	}

}
