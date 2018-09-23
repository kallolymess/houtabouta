<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRobinsonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('robinson', function(Blueprint $table)
		{
			$table->string('telefon', 18)->default('');
			$table->integer('aktionid')->unsigned()->nullable()->index('aktion_idx');
			$table->string('org', 6)->nullable()->index('org_idx');
			$table->date('datum')->index('datum_idx');
			$table->unique(['telefon','org'], 'dubletten_check2');
			$table->unique(['telefon','aktionid'], 'dubletten_check1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('robinson');
	}

}
