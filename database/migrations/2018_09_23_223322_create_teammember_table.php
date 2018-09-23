<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeammemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teammember', function(Blueprint $table)
		{
			$table->integer('id')->default(0)->primary();
			$table->string('team', 20)->default('')->index('team_idx');
			$table->string('user', 20)->default('')->index('user_idx');
			$table->string('adminrole', 20)->default('');
			$table->string('controllingrole', 20)->default('');
			$table->string('userrole', 20)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teammember');
	}

}
