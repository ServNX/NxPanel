<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDnsRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DnsRecord belongsTo Dns
        // Dns hasMany DnsRecords
        // DnsRecord belongsTo DnsType
        // DnsType hasMany DnsRecords
        Schema::create('dns_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('dns_id')->unsigned();
            $table->bigInteger('dns_type_id')->unsigned(); // A or AAAA ... etc
            $table->string('record');
            $table->string('value');
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
        Schema::dropIfExists('dns_records');
    }
}
