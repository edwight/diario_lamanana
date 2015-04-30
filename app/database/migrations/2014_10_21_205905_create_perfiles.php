<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfiles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perfiles', function(Blueprint $table){
			$table->increments('id');
			$table->string('photo',100)->nullable()->unique();
			$table->string('facebook',100)->nullable()->unique();
			$table->string('twitter',100)->nullable()->unique();
			$table->string('descripcion',100)->nullable();
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
		Schema::drop('perfiles');
	}

}
