<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHolidaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('holidays', function(Blueprint $table)
		{
			$table->foreign('holiday_calendar_id', 'holidays_ibfk_1')->references('id')->on('holiday_calendars')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('holidays', function(Blueprint $table)
		{
			$table->dropForeign('holidays_ibfk_1');
		});
	}

}
