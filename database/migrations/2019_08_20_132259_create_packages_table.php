<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Package belongsTo Templates
        // Templates hasMany Packages
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shell')->default('no-login');
            $table->string('name');

            // 0 = unlimited
            // All values are in Mb's
            $table->unsignedInteger('disk_quota');
            $table->unsignedBigInteger('bandwidth');
            $table->unsignedInteger('web_domains');
            $table->unsignedInteger('dns_domains');
            $table->unsignedInteger('mail_domains');
            $table->unsignedInteger('mail_accounts');
            $table->unsignedInteger('databases');
            $table->unsignedInteger('crons');
            $table->unsignedInteger('backups');

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
        Schema::dropIfExists('packages');
    }
}
