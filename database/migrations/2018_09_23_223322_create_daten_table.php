<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('daten', function(Blueprint $table)
		{
			$table->integer('id')->default(0)->primary();
			$table->string('anrede', 50)->default('');
			$table->string('titel', 100)->default('');
			$table->string('vorname', 150)->default('');
			$table->string('zuname', 200)->default('')->index('zuname');
			$table->string('zusatz1', 200)->default('');
			$table->string('zusatz2', 200)->default('');
			$table->string('strasse', 200)->default('');
			$table->string('plz', 20)->default('');
			$table->string('ort', 100)->default('');
			$table->string('email', 100)->default('');
			$table->string('fax', 20)->default('');
			$table->date('geburtsdatum')->nullable();
			$table->string('info', 200)->default('');
			$table->string('zahlungsart', 20)->default('');
			$table->string('institut', 100)->default('');
			$table->string('kontonummer', 50)->default('');
			$table->string('blz', 50)->default('');
			$table->string('kontoinhaber', 100)->default('');
			$table->string('kartentyp', 20)->default('');
			$table->string('kartennummer', 20)->default('');
			$table->string('kpn', 10)->default('');
			$table->string('kartenablauf', 30)->default('');
			$table->string('werbung', 20)->default('');
			$table->string('ti001', 200)->default('');
			$table->string('ti002', 200)->default('');
			$table->string('ti003', 200)->default('');
			$table->string('ti004', 200)->default('');
			$table->string('ti005', 200)->default('');
			$table->string('ti006', 200)->default('');
			$table->string('ti007', 200)->default('');
			$table->string('ti008', 200)->default('');
			$table->string('ti009', 200)->default('');
			$table->string('ti010', 200)->default('');
			$table->string('ti011', 200)->default('');
			$table->string('ti012', 200)->default('');
			$table->string('ti013', 200)->default('');
			$table->string('ti014', 200)->default('');
			$table->string('ti015', 200)->default('');
			$table->string('ti016', 200)->default('');
			$table->string('ti017', 200)->default('');
			$table->string('ti018', 200)->default('');
			$table->string('ti019', 200)->default('');
			$table->string('ti020', 200)->default('');
			$table->date('di001')->nullable();
			$table->date('di002')->nullable();
			$table->date('di003')->nullable();
			$table->date('di004')->nullable();
			$table->date('di005')->nullable();
			$table->integer('ni001')->default(0);
			$table->integer('ni002')->default(0);
			$table->integer('ni003')->default(0);
			$table->integer('ni004')->default(0);
			$table->integer('ni005')->default(0);
			$table->string('t001', 200)->default('');
			$table->string('t002', 200)->default('');
			$table->string('t003', 200)->default('');
			$table->string('t004', 200)->default('');
			$table->string('t005', 200)->default('');
			$table->string('t006', 200)->default('');
			$table->string('t007', 200)->default('');
			$table->string('t008', 200)->default('');
			$table->string('t009', 200)->default('');
			$table->string('t010', 200)->default('');
			$table->string('t011', 200)->default('');
			$table->string('t012', 200)->default('');
			$table->string('t013', 200)->default('');
			$table->string('t014', 200)->default('');
			$table->string('t015', 200)->default('');
			$table->string('t016', 200)->default('');
			$table->string('t017', 200)->default('');
			$table->string('t018', 200)->default('');
			$table->string('t019', 200)->default('');
			$table->string('t020', 200)->default('');
			$table->string('t021', 200)->default('');
			$table->string('t022', 200)->default('');
			$table->string('t023', 200)->default('');
			$table->string('t024', 200)->default('');
			$table->string('t025', 200)->default('');
			$table->string('t026', 200)->default('');
			$table->string('t027', 200)->default('');
			$table->string('t028', 200)->default('');
			$table->string('t029', 200)->default('');
			$table->string('t030', 200)->default('');
			$table->string('t031', 50)->default('');
			$table->string('t032', 120)->default('');
			$table->string('t033', 50)->default('');
			$table->string('t034', 70)->default('');
			$table->string('t035', 70)->default('');
			$table->string('t036', 50)->default('');
			$table->string('t037', 50)->default('');
			$table->string('t038', 50)->default('');
			$table->string('t039', 50)->default('');
			$table->string('t040', 80)->default('');
			$table->string('t041', 50)->default('');
			$table->string('t042', 50)->default('');
			$table->string('t043', 50)->default('');
			$table->string('t044', 50)->default('');
			$table->string('t045', 50)->default('');
			$table->string('t046', 50)->default('');
			$table->string('t047', 50)->default('');
			$table->string('t048', 50)->default('');
			$table->string('t049', 80)->default('');
			$table->string('t050', 200)->default('');
			$table->string('t051', 200)->default('');
			$table->string('t052', 50)->default('');
			$table->string('t053', 80)->default('');
			$table->string('t054', 150)->default('');
			$table->string('t055', 50)->default('');
			$table->string('t056', 50)->default('');
			$table->string('t057', 200)->default('');
			$table->string('t058', 50)->default('');
			$table->string('t059', 200)->default('');
			$table->string('t060', 200)->default('');
			$table->string('t061', 200)->default('');
			$table->string('t062', 160)->default('');
			$table->string('t063', 80)->default('');
			$table->string('t064', 80)->default('');
			$table->string('t065', 50)->default('');
			$table->string('t066', 50)->default('');
			$table->string('t067', 50)->default('');
			$table->string('t068', 50)->default('');
			$table->string('t069', 50)->default('');
			$table->string('t070', 50)->default('');
			$table->string('t071', 150)->default('');
			$table->string('t072', 50)->default('');
			$table->string('t073', 50)->default('');
			$table->string('t074', 50)->default('');
			$table->string('t075', 100)->default('');
			$table->string('t076', 50)->default('');
			$table->string('t077', 50)->default('');
			$table->string('t078', 50)->default('');
			$table->string('t079', 200)->default('');
			$table->string('t080', 50)->default('');
			$table->string('t081', 50)->default('');
			$table->string('t082', 50)->default('');
			$table->string('t083', 50)->default('');
			$table->string('t084', 50)->default('');
			$table->string('t085', 50)->default('');
			$table->string('t086', 50)->default('');
			$table->string('t087', 50)->default('');
			$table->string('t088', 50)->default('');
			$table->string('t089', 50)->default('');
			$table->string('t090', 50)->default('');
			$table->string('t091', 50)->default('');
			$table->string('t092', 200)->default('');
			$table->string('t093', 50)->default('');
			$table->string('t094', 50)->default('');
			$table->string('t095', 50)->default('');
			$table->string('t096', 50)->default('');
			$table->string('t097', 50)->default('');
			$table->string('t098', 50)->default('');
			$table->string('t099', 50)->default('');
			$table->string('t100', 50)->default('');
			$table->string('t101', 50)->default('');
			$table->string('t102', 50)->default('');
			$table->string('t103', 50)->default('');
			$table->string('t104', 50)->default('');
			$table->string('t105', 50)->default('');
			$table->string('t106', 50)->default('');
			$table->string('t107', 50)->default('');
			$table->string('t108', 50)->default('');
			$table->string('t109', 50)->default('');
			$table->string('t110', 50)->default('');
			$table->string('t111', 50)->default('');
			$table->string('t112', 50)->default('');
			$table->string('t113', 50)->default('');
			$table->string('t114', 50)->default('');
			$table->string('t115', 50)->default('');
			$table->string('t116', 50)->default('');
			$table->string('t117', 50)->default('');
			$table->string('t118', 50)->default('');
			$table->string('t119', 50)->default('');
			$table->string('t120', 50)->default('');
			$table->string('t121', 50)->default('');
			$table->string('t122', 50)->default('');
			$table->string('t123', 50)->default('');
			$table->string('t124', 50)->default('');
			$table->string('t125', 50)->default('');
			$table->string('t126', 50)->default('');
			$table->string('t127', 50)->default('');
			$table->string('t128', 50)->default('');
			$table->string('t129', 50)->default('');
			$table->string('t130', 50)->default('');
			$table->string('t131', 50)->default('');
			$table->string('t132', 50)->default('');
			$table->string('t133', 50)->default('');
			$table->string('t134', 50)->default('');
			$table->string('t135', 50)->default('');
			$table->string('t136', 50)->default('');
			$table->string('t137', 50)->default('');
			$table->string('t138', 50)->default('');
			$table->string('t139', 50)->default('');
			$table->string('t140', 50)->default('');
			$table->string('t141', 50)->default('');
			$table->string('t142', 50)->default('');
			$table->string('t143', 50)->default('');
			$table->string('t144', 50)->default('');
			$table->string('t145', 50)->default('');
			$table->text('t146', 65535);
			$table->string('t147', 50)->default('')->index('refNr_9_idx');
			$table->string('t148', 50)->default('')->index('refNr_16_idx');
			$table->text('t149', 65535);
			$table->string('t150', 1000);
			$table->date('d001')->nullable();
			$table->date('d002')->nullable();
			$table->date('d003')->nullable();
			$table->date('d004')->nullable();
			$table->date('d005')->nullable();
			$table->integer('n001')->default(0);
			$table->integer('n002')->default(0);
			$table->integer('n003')->default(0);
			$table->integer('n004')->default(0);
			$table->integer('n005')->default(0);
			$table->integer('n006')->default(0);
			$table->integer('n007')->default(0);
			$table->integer('n008')->default(0);
			$table->integer('n009')->default(0);
			$table->integer('n010')->default(0);
			$table->string('tc001', 100)->default('');
			$table->string('tc002', 100)->default('');
			$table->string('tc003', 100)->default('');
			$table->string('tc004', 100)->default('');
			$table->string('tc005', 100)->default('');
			$table->integer('nc001')->default(0);
			$table->integer('nc002')->default(0);
			$table->integer('nc003')->default(0);
			$table->integer('nc004')->default(0);
			$table->integer('nc005')->default(0);
			$table->dateTime('z001')->nullable();
			$table->dateTime('z002')->nullable();
			$table->dateTime('z003')->nullable();
			$table->dateTime('z004')->nullable();
			$table->dateTime('z005')->nullable();
			$table->integer('vkanteile')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('daten');
	}

}
