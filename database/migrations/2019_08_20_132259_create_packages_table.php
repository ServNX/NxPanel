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
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('web_template_id')->unsigned();
            $table->bigInteger('dns_template_id')->unsigned();
            $table->bigInteger('backend_template_id')->unsigned();
            $table->string('shell')->default('no-login');

            // 0 = unlimited
            // All values are in Mb's
            $table->integer('disk_quota')->default(200);
            $table->bigInteger('bandwidth')->default(1000);
            $table->integer('web_domains')->default(1);
            $table->integer('web_aliases')->default(1);
            $table->integer('dns_domains')->default(1);
            $table->integer('dns_records')->default(1);
            $table->integer('mail_domains')->default(1);
            $table->integer('mail_accounts')->default(1);
            $table->integer('databases')->default(1);
            $table->integer('crons')->default(1);
            $table->integer('backups')->default(1);

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
