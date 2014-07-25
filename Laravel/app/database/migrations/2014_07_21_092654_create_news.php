<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNews extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function($table)
		{
		    $table->increments('id');
		    $table->string('title');
		    $table->string('content');
			$table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('categories');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('news');
	}

}
