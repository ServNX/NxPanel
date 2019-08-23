<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Dns belongTo a Domain
        // Domains hasMany Dns
        // Dns belongsTo Template
        // Template hasMany Dns
        // Dns belongsTo Ip
        // Ip hasMany Dns
        // Dns belongsTo Service
        // Service hasMany Dns
        Schema::create('dns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('domain_id');
            $table->unsignedBigInteger('template_id');
            $table->unsignedBigInteger('ip_id');
            $table->unsignedBigInteger('service_id');
            $table->date('expires')->default(now()->addYear());
            $table->unsignedInteger('ttl')->default(14400);
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
        Schema::dropIfExists('dns');
    }
}
