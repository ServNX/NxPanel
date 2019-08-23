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
            $table->unsignedBigInteger('web_template_id');
            $table->unsignedBigInteger('dns_template_id');
            $table->unsignedBigInteger('backend_template_id');
            $table->string('shell')->default('no-login');

            // 0 = unlimited
            // All values are in Mb's
            $table->unsignedInteger('disk_quota')->default(200);
            $table->unsignedBigInteger('bandwidth')->default(1000);
            $table->unsignedInteger('web_domains')->default(1);
            $table->unsignedInteger('web_aliases')->default(1);
            $table->unsignedInteger('dns_domains')->default(1);
            $table->unsignedInteger('dns_records')->default(1);
            $table->unsignedInteger('mail_domains')->default(1);
            $table->unsignedInteger('mail_accounts')->default(1);
            $table->unsignedInteger('databases')->default(1);
            $table->unsignedInteger('crons')->default(1);
            $table->unsignedInteger('backups')->default(1);

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
