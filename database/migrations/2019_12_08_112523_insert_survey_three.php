<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertSurveyThree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_threes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('q1_3');
            $table->string('q2_3');
            $table->string('q3_3');
            $table->integer('q4_3');
            $table->string('q5_3');
            $table->string('q6_3');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_three');
    }
}
