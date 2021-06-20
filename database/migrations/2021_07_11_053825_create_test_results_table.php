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
            $table->unsignedBigInteger('exam_result_id')->nullable();
            $table->unsignedBigInteger('test_id')->nullable();
            $table->unsignedBigInteger('sample_id')->nullable();
            $table->unsignedBigInteger('lab_result_id');
            $table->string('hasil')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();

            $table->foreign('exam_result_id')->references('id')->on('exam_results');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->foreign('lab_result_id')->references('id')->on('lab_results');
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
        Schema::dropIfExists('test_results');
    }
}
