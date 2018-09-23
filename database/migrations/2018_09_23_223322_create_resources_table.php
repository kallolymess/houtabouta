<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resources', function(Blueprint $table)
		{
			$table->integer('id')->default(0)->primary();
			$table->integer('fk_aktion')->nullable();
			$table->string('type', 20)->default('');
			$table->string('name', 50)->default('');
			$table->text('data', 16777215);
			$table->unique(['fk_aktion','name'], 'aktion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resources');
	}

}
