<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuchungTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('buchung', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('mandant', 6);
			$table->string('kontomandant', 9);
			$table->string('typ', 200)->nullable();
			$table->float('betrag', 10, 0);
			$table->date('datum')->nullable();
			$table->text('beschreibung', 65535)->nullable();
			$table->string('tarifKey', 50)->nullable();
			$table->string('tarifTabellenKZ', 12)->default('std');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('buchung');
	}

}
