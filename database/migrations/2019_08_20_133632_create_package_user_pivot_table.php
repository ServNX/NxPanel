<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageUserPivotTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    /* Many to Many Pivot Table */
    /* Users can haveMany Packages */
    /* Packages can haveMany Users */
    Schema::create('package_user', function (Blueprint $table) {
      $table->integer('user_id');
      $table->integer('package_id');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('package_user');
  }
}
