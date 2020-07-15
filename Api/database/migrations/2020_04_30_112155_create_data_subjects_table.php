<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_subject', function (Blueprint $table) {
            $table->string('Subject','50')->primary();
            $table->string('Email','100');
            $table->string('SubliminalType','20');
            $table->integer('BlinkFrenquency');
            $table->integer('BlinkDuration');
            $table->string('CueingType','20');
            $table->string('CueingValue','100');
            $table->timestamp('CreationTime', 0);
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
        Schema::dropIfExists('data_subjects');
    }
}
