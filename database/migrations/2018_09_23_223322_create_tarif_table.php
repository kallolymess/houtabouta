<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarifTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarif', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('key', 1)->nullable();
			$table->string('name', 200)->nullable();
			$table->string('einheit', 20)->nullable();
			$table->float('preisProEinheit', 10, 0)->nullable();
			$table->date('aktivSeit')->nullable();
			$table->date('aktivBis')->nullable();
			$table->string('beschreibung', 1000)->nullable();
			$table->string('typ', 45)->nullable();
			$table->string('tabellenKZ', 12)->nullable();
			$table->unique(['tabellenKZ','typ','key','aktivSeit'], 'tarifUnique_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tarif');
	}

}
