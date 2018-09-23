<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarifmappingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarifmapping', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('typ', 20)->nullable();
			$table->string('wertMuster', 200)->nullable();
			$table->char('key', 1)->nullable();
			$table->index(['typ','key'], 'tarif_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tarifmapping');
	}

}
