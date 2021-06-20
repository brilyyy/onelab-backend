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
            $table->unsignedBigInteger('laborat_id')->nullable();
            $table->string('no_spesimen')->nullable();
            $table->string('tanggal_pengambilan_spesimen')->nullable();
            $table->string('jam_pengambilan_spesimen')->nullable();
            $table->string('tanggal_transaksi')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('laborat_id')->references('id')->on('laborats');
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
