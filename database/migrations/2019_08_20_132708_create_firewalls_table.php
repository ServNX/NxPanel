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
        // Firewall belongsTo a Server
        // Server hasMany Firewalls
        // Firewall belongsTo Service
        // Service hasMany Firewalls
        // Firewall belongsTo Ip
        // Ip hasMany Firewalls
        Schema::create('firewalls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('server_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('ip_id');
            $table->string('action');
            $table->string('protocol');
            $table->string('port'); // type string to support range and comma separated values
            $table->string('description')->nullable();
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
