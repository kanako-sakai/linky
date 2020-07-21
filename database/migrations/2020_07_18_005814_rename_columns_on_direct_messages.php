<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsOnDirectMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('direct_messages', function (Blueprint $table) {
            $table->renameColumn('from_user_id', 'user_id');
            $table->renameColumn('to_user_id', 'board_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('direct_messages', function (Blueprint $table) {
            $table->renameColumn('user_id','from_user_id');
            $table->renameColumn('board_id','to_user_id');
        });
    }
}
