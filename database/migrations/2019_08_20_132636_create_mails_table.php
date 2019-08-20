<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    /* Mail belongsTo Domain */
    /* Domains hasMany Mail */
    Schema::create('mails', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->bigInteger('domain_id')->unsigned();
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
    Schema::dropIfExists('mails');
  }
}
