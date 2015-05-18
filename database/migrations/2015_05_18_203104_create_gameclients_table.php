<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameclientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gameclients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('idgame');
			$table->integer('idclient');
			$table->integer('score1');
			$table->integer('score2');
			$table->integer('mount');
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
		Schema::drop('gameclients');
	}

}
