<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCronsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Cron Jobs belongTo a User
        // Users hasMany Cron Jobs
        Schema::create('crons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('command');

            // Defaults to every hour
            $table->string('minute')->default('0');
            $table->string('hour')->default('*');
            $table->string('day')->default('*');
            $table->string('month')->default('*');
            $table->string('day_of_week')->default('*');

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
        Schema::dropIfExists('crons');
    }
}
