<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTestsAddGlobaltestsfk extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tests', function(Blueprint $table)
		{
			$table->integer('global_test_id')->unsigned();
			$table->foreign('global_test_id')->references('id')->on('global_tests');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
