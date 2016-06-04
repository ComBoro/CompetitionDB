<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->tinyInteger('grade');
		});

		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('creatorid')->unsigned()->index();
			$table->string('name');
			$table->date('start')->index();
			$table->date('end');
			$table->tinyInteger('mingrade')->default(5);
			$table->tinyInteger('maxgrade')->default(12);		
			$table->string('website')->nullable();
			$table->longtext('description');
			$table->timestamps();
			$table->foreign('creatorid')->references('id')->on('users');
		});

		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tagname');
			$table->longtext('description')->nullable();
		});

		Schema::create('userEvents', function(Blueprint $table)
		{
			$table->integer('userid')->unsigned()->index();
			$table->integer('eventid')->unsigned();
			$table->foreign('userid')->references('id')->on('users');
			$table->foreign('eventid')->references('id')->on('events');
			$table->timestamps();
		});

		Schema::create('eventTags', function(Blueprint $table)
		{
			$table->integer('eventid')->unsigned()->index();
			$table->integer('tagid')->unsigned()->index();
			$table->foreign('eventid')->references('id')->on('events');
			$table->foreign('tagid')->references('id')->on('tags');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userEvents');
		Schema::drop('eventTags');
		Schema::drop('tags');
		Schema::drop('events');

		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn('grade');
		});
	}

}
