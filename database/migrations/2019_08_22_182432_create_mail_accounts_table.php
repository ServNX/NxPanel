<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // MailAccount belongsTo Mail
        // Mail hasMany MailAccounts
        Schema::create('mail_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mail_id')->unsigned();
            $table->string('account');
            $table->string('password');
            $table->integer('disk_quota')->default(0); // 0 = unlimited
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
        Schema::dropIfExists('mail_accounts');
    }
}
