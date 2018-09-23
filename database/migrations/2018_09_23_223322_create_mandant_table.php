<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMandantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mandant', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tarifTabellenKZ', 12)->nullable()->index('tariftabellen_idx');
			$table->string('mandant', 9)->unique('mandant');
			$table->string('kontomandant', 9);
			$table->float('kreditlinie1', 10, 0)->nullable();
			$table->float('kreditlinie2', 10, 0)->nullable();
			$table->string('dialerdomains')->nullable();
			$table->dateTime('lastWarning')->nullable();
			$table->string('notificationTrigger', 45)->default('g7');
			$table->integer('notificationInterval')->unsigned()->default(1);
			$table->string('handynummern')->nullable();
			$table->string('emails')->nullable();
			$table->string('language', 3)->nullable();
			$table->string('currency', 3)->nullable();
			$table->string('bank');
			$table->string('tarifWechsel')->nullable();
			$table->string('debitorenNr', 20)->nullable();
			$table->string('properties')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mandant');
	}

}
