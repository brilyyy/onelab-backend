<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('examination_id')->nullable();
            $table->unsignedBigInteger('test_id')->nullable();
            $table->unsignedBigInteger('lab_result_id');
            $table->string('hasil')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();

            $table->foreign('examination_id')->references('id')->on('examinations');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->foreign('lab_result_id')->references('id')->on('lab_results');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_results');
    }
}
