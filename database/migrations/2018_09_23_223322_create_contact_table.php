<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('refnr', 25)->default('');
			$table->string('herkunft', 20)->default('');
			$table->string('telefon', 20)->default('');
			$table->integer('aktionid')->unsigned()->default(0);
			$table->string('anrede', 10)->default('');
			$table->string('titel', 15)->default('');
			$table->string('vorname', 30)->default('');
			$table->string('zuname', 30)->default('');
			$table->string('strasse', 45)->default('');
			$table->string('ort', 45)->default('');
			$table->string('plz', 6)->default('');
			$table->string('info', 200)->nullable();
			$table->string('ti001', 200)->nullable();
			$table->string('ti002', 200)->nullable();
			$table->string('ti003', 200)->nullable();
			$table->string('ti004', 200)->nullable();
			$table->string('ti005', 200)->nullable();
			$table->string('ti006', 200)->nullable();
			$table->string('ti007', 200)->nullable();
			$table->string('ti008', 200)->nullable();
			$table->string('ti009', 200)->nullable();
			$table->string('ti010', 200)->nullable();
			$table->string('telefon2', 20)->default('');
			$table->string('ti011', 200)->nullable();
			$table->string('ti012', 200)->nullable();
			$table->string('ti013', 200)->nullable();
			$table->string('ti014', 200)->nullable();
			$table->string('ti015', 200)->nullable();
			$table->string('ti016', 200)->nullable();
			$table->string('ti017', 200)->nullable();
			$table->string('ti018', 200)->nullable();
			$table->string('ti019', 200)->nullable();
			$table->string('ti020', 200)->nullable();
			$table->unique(['aktionid','refnr','vorname'], 'doubletten_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contact');
	}

}
