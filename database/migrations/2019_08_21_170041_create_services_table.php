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
        // Service belongsTo Server
        // Server hasMany Services
        // Service belongsTo Status
        // Status hasMany Service
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('server_id');
            $table->unsignedBigInteger('status_id');
            $table->string('name');
            $table->string('start');
            $table->string('restart');
            $table->string('stop');
            $table->unsignedInteger('cpu')->default(0);
            $table->unsignedInteger('memory')->default(0);
            $table->unsignedInteger('uptime')->default(0);
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
