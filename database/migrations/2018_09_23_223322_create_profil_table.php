<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profil', function(Blueprint $table)
		{
			$table->integer('id')->default(0)->primary();
			$table->string('name', 50)->default('');
			$table->boolean('predictive')->default(0);
			$table->string('team', 50)->default('')->index('team');
			$table->string('inbound_group', 100);
			$table->integer('aktion_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profil');
	}

}
