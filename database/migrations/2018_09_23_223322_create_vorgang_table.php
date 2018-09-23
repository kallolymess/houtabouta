<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVorgangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vorgang', function(Blueprint $table)
		{
			$table->integer('id')->default(0)->primary();
			$table->integer('seqnr')->default(0);
			$table->integer('tel_id')->default(0);
			$table->string('selektion', 30)->default('');
			$table->string('locked_for', 20)->default('')->index('locks');
			$table->dateTime('lost_call')->nullable()->index('lost_call');
			$table->smallInteger('fail_8')->default(0);
			$table->smallInteger('fail_10')->default(0);
			$table->smallInteger('fail_12')->default(0);
			$table->smallInteger('fail_14')->default(0);
			$table->smallInteger('fail_16')->default(0);
			$table->smallInteger('fail_18')->default(0);
			$table->smallInteger('fail_sa')->default(0);
			$table->smallInteger('fail_ab')->default(0);
			$table->smallInteger('fail_noresp')->default(0);
			$table->smallInteger('fail_hangup')->default(0);
			$table->smallInteger('fail_drop')->default(0);
			$table->smallInteger('fail_invalid')->default(0);
			$table->smallInteger('connected')->default(0);
			$table->string('ergebnis', 30)->default('');
			$table->dateTime('kontaktdatum')->nullable()->index('kontakte2');
			$table->string('user', 20)->default('');
			$table->dateTime('wiedervorlage')->nullable();
			$table->string('wv_user', 20)->default('');
			$table->dateTime('exportdatum')->nullable()->index('exportdatum');
			$table->dateTime('exportdatum2')->nullable();
			$table->dateTime('exportdatum3')->nullable();
			$table->dateTime('exportdatum4')->nullable();
			$table->dateTime('exportdatum5')->nullable();
			$table->string('telefon', 20)->default('')->index('telefon');
			$table->string('telefon2', 20)->default('');
			$table->string('import_selektion', 30)->default('');
			$table->string('bemerkung', 202)->nullable();
			$table->string('status', 20)->default('');
			$table->string('herkunft', 20)->default('');
			$table->integer('aktion_id')->default(0);
			$table->integer('import_aktion_id')->default(0);
			$table->dateTime('entrydate')->nullable();
			$table->dateTime('wf_timeout')->nullable();
			$table->integer('fk_last_kontakt')->nullable();
			$table->index(['user','kontaktdatum'], 'kontakte');
			$table->index(['wv_user','wiedervorlage'], 'wiedervorlagen');
			$table->index(['selektion','ergebnis','kontaktdatum'], 'selektionen');
			$table->index(['ergebnis','kontaktdatum'], 'ergebnisse');
			$table->index(['aktion_id','status','ergebnis'], 'aktionen');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vorgang');
	}

}
