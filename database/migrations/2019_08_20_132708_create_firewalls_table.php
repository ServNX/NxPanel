<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirewallsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    /* Server hasMany Firewalls */
    /* Firewall belongsTo a Server */
    Schema::create('firewalls', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('server_id');
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
    Schema::dropIfExists('firewalls');
  }
}
