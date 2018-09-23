<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToQuotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('quota', function(Blueprint $table)
		{
			$table->foreign('fk_profil', 'FK66F3E78E56B36F6')->references('id')->on('profil')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('quota', function(Blueprint $table)
		{
			$table->dropForeign('FK66F3E78E56B36F6');
		});
	}

}
