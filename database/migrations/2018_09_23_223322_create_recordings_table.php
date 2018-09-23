<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecordingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recordings', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->default(0)->primary();
			$table->binary('record', 16777215)->nullable();
			$table->integer('fk_vorgang')->unsigned()->nullable()->index('vorgang');
			$table->integer('fk_kontakt')->unsigned()->nullable()->index('kontakt');
			$table->string('telefon', 20)->default('');
			$table->dateTime('starttime')->nullable();
			$table->string('format', 10)->default('');
			$table->integer('duration')->unsigned()->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recordings');
	}

}
