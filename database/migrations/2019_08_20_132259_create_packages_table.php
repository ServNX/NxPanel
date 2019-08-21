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

      // no plans on supporting more than 4 Nameservers
      $table->string('ns_one')->default('ns1.domain.tld');
      $table->string('ns_two')->default('ns2.domain.tld');
      $table->string('ns_three')->default('ns3.domain.tld');
      $table->string('ns_four')->default('ns4.domain.tld');

      // 0 = unlimited
      $table->integer('disk_quota')->default(200); // Mb
      $table->bigInteger('bandwidth')->default(1000); // Mb
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

    Schema::table('packages', function (Blueprint $table) {
      $table->foreign('web_template_id')->references('id')->on('templates');
      $table->foreign('dns_template_id')->references('id')->on('templates');
      $table->foreign('backend_template_id')->references('id')->on('templates');
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
