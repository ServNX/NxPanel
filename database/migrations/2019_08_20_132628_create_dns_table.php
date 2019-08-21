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
        /* Dns belongTo a Domain */
        /* Domains hasMany Dns */
        /* Dns belongsTo Template */
        /* Template hasMany Dns */
        Schema::create('dns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('domain_id')->unsigned();
            $table->bigInteger('template_id')->unsigned();
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
