<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('education', 50);
            $table->integer('working_years');
            $table->string('employee', 50);
            $table->integer('industry_id');
            $table->integer('job_category_id');
            $table->tinyInteger('expat')->nullable();
            $table->tinyInteger('mba')->nullable();
            $table->tinyInteger('other_study_abroad')->nullable();
            $table->tinyInteger('returnee')->nullable();
            $table->tinyInteger('career_change');
            $table->tinyInteger('marriage_status');
            $table->tinyInteger('child_status');
            $table->timestamps();
            
             
            //外部キー制約
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
