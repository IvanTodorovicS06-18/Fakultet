<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentPredmetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_predmet', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('studenti')->onDelete('cascade');

            $table->unsignedBigInteger('predmet_id')->unsigned();
            $table->foreign('predmet_id')->references('id')->on('predmet')->onDelete('cascade');

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
        Schema::dropIfExists('student_predmet');
    }
}
