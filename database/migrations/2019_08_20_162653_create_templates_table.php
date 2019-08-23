<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Template belongsTo a Server
        // Server hasMany Templates
        // Template belongsTo TemplateType
        // TemplateType hasMany Templates
        Schema::create('templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('server_id')->unsigned();
            $table->bigInteger('template_type_id')->unsigned();
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
        Schema::dropIfExists('templates');
    }
}
