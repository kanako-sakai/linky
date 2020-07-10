<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email_auth_number', 8)->nullable();
            $table->dateTime('email_auth_valid_datetime')->nullable();
            $table->dateTime('valid_datetime')->nullable();
            $table->string('card_number', 32)->nullable();
            $table->string('stripe_token', 64)->nullable();
            $table->tinyInteger('agree');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email_auth_number');
            $table->dropColumn('email_auth_valid_datetime');
            $table->dropColumn('valid_datetime');
            $table->dropColumn('card_number');
            $table->dropColumn('stripe_token');
            $table->dropColumn('agree');
        });
    }
}
