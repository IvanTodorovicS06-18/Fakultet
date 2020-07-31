<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIspitiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ispiti', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('studenti')->onDelete('cascade');

            $table->unsignedBigInteger('predmet_id')->unsigned();
            $table->foreign('predmet_id')->references('id')->on('predmet')->onDelete('cascade');
            $table->string('ispitni_rok')->nullable();
            $table->integer('ocena')->nullable();

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
        Schema::dropIfExists('ispiti');
    }
}
