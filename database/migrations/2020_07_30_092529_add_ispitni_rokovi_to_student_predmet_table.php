<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIspitniRokoviToStudentPredmetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_predmet', function (Blueprint $table) {
            $table->enum('ispitni_rok',['januar','februar','jun','jul','avgust','septembar'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_predmet', function (Blueprint $table) {
            //
        });
    }
}
