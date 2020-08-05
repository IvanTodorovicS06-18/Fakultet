<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKolokvijumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kolokvijum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('predmet_id')->unsigned();
            $table->foreign('predmet_id')->references('id')->on('predmet')->onDelete('cascade');
            $table->string('dezurni_profesor');
            $table->string('ucionica');
            $table->dateTime('datum_polaganja');
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
        Schema::dropIfExists('kolokvijum');
    }
}
