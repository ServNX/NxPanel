<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('server_id')->references('id')->on('servers');
        });

        Schema::table('websites', function (Blueprint $table) {
            $table->foreign('domain_id')->references('id')->on('domains');
            $table->foreign('template_id')->references('id')->on('templates');
        });

        Schema::table('dns', function (Blueprint $table) {
            $table->foreign('domain_id')->references('id')->on('domains');
            $table->foreign('template_id')->references('id')->on('templates');
        });

        Schema::table('mails', function (Blueprint $table) {
            $table->foreign('domain_id')->references('id')->on('domains');
        });

        Schema::table('databases', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('firewalls', function (Blueprint $table) {
            $table->foreign('server_id')->references('id')->on('servers');
        });

        Schema::table('crons', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('backups', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('domains', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('package_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('package_id')->references('id')->on('packages');
        });

        Schema::table('templates', function (Blueprint $table) {
            $table->foreign('server_id')->references('id')->on('servers');
            $table->foreign('template_type_id')->references('id')->on('template_types');
        });

        Schema::table('packages', function (Blueprint $table) {
            $table->foreign('web_template_id')->references('id')->on('templates');
            $table->foreign('dns_template_id')->references('id')->on('templates');
            $table->foreign('backend_template_id')->references('id')->on('templates');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreign('server_id')->references('id')->on('servers');
            $table->foreign('status_id')->references('id')->on('statuses');
        });

        Schema::table('ips', function (Blueprint $table) {
            $table->foreign('server_id')->references('id')->on('servers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
