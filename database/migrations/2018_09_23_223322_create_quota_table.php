<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quota', function(Blueprint $table)
		{
			$table->integer('id')->default(0)->primary();
			$table->string('selektion', 30)->default('');
			$table->integer('quote')->default(0);
			$table->integer('fk_profil')->nullable()->index('fk_profil_2');
			$table->integer('aktion_id')->nullable();
			$table->index(['selektion','fk_profil'], 'selektion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quota');
	}

}
