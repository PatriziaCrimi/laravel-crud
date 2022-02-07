<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TextareaRoomsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('rooms', function(Blueprint $table) {
      $table->string('description')->nullable()->after('size');
      $table->string('notes')->nullable()->after('description');
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
      $table->dropColumn('notes');
      $table->dropColumn('description');
    });
  }
}
