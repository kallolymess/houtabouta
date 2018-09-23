<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKontaktTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kontakt', function(Blueprint $table)
		{
			$table->integer('id')->default(0)->primary();
			$table->string('ergebnis', 30)->nullable();
			$table->dateTime('kontaktstart')->nullable()->index('kontaktstart');
			$table->dateTime('connectstart')->nullable();
			$table->dateTime('connectende')->nullable();
			$table->dateTime('kontaktende')->nullable()->index('kontaktende');
			$table->smallInteger('pause')->unsigned()->default(0);
			$table->string('user', 20)->default('');
			$table->dateTime('wiedervorlage')->nullable();
			$table->string('status', 5)->default('');
			$table->integer('fk_vorgang')->nullable()->index('fk_vorgang');
			$table->date('kontaktdatum')->nullable()->index('kontaktdatum_idx');
			$table->string('org', 10)->default('');
			$table->string('inboundart', 20)->default('');
			$table->string('kontakttarif', 10)->default('');
			$table->string('tarifTabellenKZ', 12)->nullable();
			$table->string('dialerdomain', 20)->nullable();
			$table->string('clientaddress', 100)->nullable();
			$table->string('tel', 20)->nullable();
			$table->string('feedback', 20);
			$table->string('herkunft', 20)->default('');
			$table->string('zahlungsart', 15)->default('');
			$table->string('tc001', 200)->default('');
			$table->string('tc002', 200)->default('');
			$table->string('tc003', 200)->default('');
			$table->string('tc004', 200)->default('');
			$table->string('tc005', 200)->default('');
			$table->integer('nc001')->default(0);
			$table->integer('nc002')->default(0);
			$table->integer('nc003')->default(0);
			$table->integer('nc004')->default(0);
			$table->integer('nc005')->default(0);
			$table->integer('aktion_id')->default(0);
			$table->integer('vkanteile')->default(0);
			$table->integer('fk_last_kontakt')->nullable();
			$table->index(['user','kontaktende'], 'user');
			$table->index(['user','kontaktstart'], 'user2');
			$table->index(['status','kontaktende','wiedervorlage'], 'status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kontakt');
	}

}
