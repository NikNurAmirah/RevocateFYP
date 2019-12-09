<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertSurveyOne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('survey_ones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('q1_1');
            $table->string('q2_1');
            $table->string('q3_1');
            $table->string('q4_1');
            $table->string('q5_1');
            $table->string('q6_1');
            $table->string('q7_1');
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
        Schema::dropIfExists('survey_one');
    }
}
