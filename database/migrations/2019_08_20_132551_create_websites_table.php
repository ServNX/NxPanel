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
        // Website belongTo a Domain
        // Domains hasOne Website
        // Website belongsTo Template
        // Template hasMany Websites
        // Website belongsTo an Ip
        // Ip hasMany Websites
        // Website belongsTo a Service
        // Service hasMany Websites
        Schema::create('websites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('domain_id');
            $table->unsignedBigInteger('template_id');
            $table->unsignedBigInteger('ip_id');
            $table->unsignedBigInteger('service_id');
            $table->string('description')->nullable();
            $table->unsignedInteger('disk_quota')->default(0); // 0 = unlimited
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
