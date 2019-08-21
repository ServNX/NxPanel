<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* IPs belongsTo Server */
        /* Server hasMany IPs */
        Schema::create('ips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('server_id');
            $table->string('value');
            $table->timestamps();
        });

        Schema::table('ips', function (Blueprint $table) {
            $table->foreign('server_id')->references('id')->on('servers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ips');
    }
}
