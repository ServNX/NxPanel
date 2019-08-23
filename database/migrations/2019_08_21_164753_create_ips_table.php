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
        // IPs belongsTo Server
        // Server hasMany IPs

        /*
         * Ips do NOT have to belong to a Server
         * For example, An IP can be from another server and being used for DNS records
         */
        Schema::create('ips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('server_id')->nullable();
            $table->string('value');
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
        Schema::dropIfExists('ips');
    }
}
