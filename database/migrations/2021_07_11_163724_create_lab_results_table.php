<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('examination_id');
            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('laborat_id');
            $table->unsignedBigInteger('sample_id');
            $table->string('no_spesimen');
            $table->string('jam_pengambilan_spesimen');
            $table->string('hasil');
            $table->string('catatan');
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('examination_id')->references('id')->on('examinations');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->foreign('laborat_id')->references('id')->on('laborats');
            $table->foreign('sample_id')->references('id')->on('samples');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab_results');
    }
}
