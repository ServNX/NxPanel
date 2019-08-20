<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    /* Website belongTo a Domain */
    /* Domains hasOne Website */
    Schema::create('websites', function (Blueprint $table) {
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
    Schema::dropIfExists('webs');
  }
}
