<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAktionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aktion', function(Blueprint $table)
		{
			$table->integer('id')->default(0)->primary();
			$table->string('name', 50)->default('');
			$table->text('metadata', 16777215);
			$table->string('org', 10)->default('');
			$table->integer('version')->unsigned()->default(0);
			$table->string('kurzname', 20)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aktion');
	}

}
