<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMsglogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('msglog', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type', 80);
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->string('profilId', 10)->default('0');
			$table->decimal('dials')->default(0.00);
			$table->decimal('connects')->default(0.00);
			$table->decimal('drops')->default(0.00);
			$table->decimal('losts')->default(0.00);
			$table->decimal('reachebility')->default(0.00);
			$table->decimal('waittime')->default(0.00);
			$table->index(['profilId','date'], 'profilDate_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('msglog');
	}

}
