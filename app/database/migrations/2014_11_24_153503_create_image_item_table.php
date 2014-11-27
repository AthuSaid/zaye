<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImageItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('image_item', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('image_id')->unsigned()->index();
			$table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
			$table->integer('item_id')->unsigned()->index();
			$table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
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
		Schema::drop('image_item');
	}

}
