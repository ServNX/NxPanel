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
            $table->foreign('ip_id')->references('id')->on('ips');
            $table->foreign('service_id')->references('id')->on('services');
        });

        Schema::table('dns', function (Blueprint $table) {
            $table->foreign('domain_id')->references('id')->on('domains');
            $table->foreign('ip_id')->references('id')->on('ips');
            $table->foreign('service_id')->references('id')->on('services');
        });

        Schema::table('mails', function (Blueprint $table) {
            $table->foreign('domain_id')->references('id')->on('domains');
            $table->foreign('service_id')->references('id')->on('services');
        });

        Schema::table('databases', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('services');
        });

        Schema::table('firewalls', function (Blueprint $table) {
            $table->foreign('server_id')->references('id')->on('servers');
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('ip_id')->references('id')->on('ips');
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
            //
        });

        Schema::table('packages', function (Blueprint $table) {
            //
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreign('server_id')->references('id')->on('servers');
            $table->foreign('status_id')->references('id')->on('statuses');
        });

        Schema::table('ips', function (Blueprint $table) {
            $table->foreign('server_id')->references('id')->on('servers');
        });

        Schema::table('dns_records', function (Blueprint $table) {
            $table->foreign('dns_id')->references('id')->on('dns');
            $table->foreign('dns_type_id')->references('id')->on('dns_types');
        });

        Schema::table('mail_accounts', function (Blueprint $table) {
            $table->foreign('mail_id')->references('id')->on('mails');
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
