<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvailabilityRoomsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('rooms', function (Blueprint $table) {
      $table->string('availability')->default('yes')->after('id');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('rooms', function (Blueprint $table) {
      $table->dropColumn('availability');
    });
  }
}
