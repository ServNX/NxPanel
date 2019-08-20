<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabasesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    /* Database belongTo a User */
    /* Users hasMany Databases */
    Schema::create('databases', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->bigInteger('user_id')->unsigned();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('databases');
  }
}
