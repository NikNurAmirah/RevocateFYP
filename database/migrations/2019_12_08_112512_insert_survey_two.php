<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertSurveyTwo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('survey_twos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('q1_2');
            $table->string('q2_2');
            $table->string('q3_2');
            $table->string('q4_2');
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
       Schema::dropIfExists('survey_two');
    }
}
