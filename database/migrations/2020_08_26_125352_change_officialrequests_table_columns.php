<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeOfficialrequestsTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('official_requests', function (Blueprint $table) {
            $table->text('goal')->change();
            $table->text('questions')->change();
            $table->text('dates')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('official_requests', function (Blueprint $table) {
            $table->string('goal')->change();
            $table->string('questions')->change();
            $table->string('dates')->change();
        });
    }
}
