<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Service belongsTo Server */
        /* Server hasMany Services */
        /* Service belongsTo Status */
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('server_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();
            $table->string('name');
            $table->string('start');
            $table->string('restart');
            $table->string('stop');
            $table->integer('cpu')->default(0);
            $table->integer('memory')->default(0);
            $table->integer('uptime')->default(0);
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
        Schema::dropIfExists('services');
    }
}
