<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSeasonRoomsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('rooms', function (Blueprint $table) {
    $table->string('season')->nullable()->after('name');
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
      $table->dropColumn('season');
    });
  }
}
