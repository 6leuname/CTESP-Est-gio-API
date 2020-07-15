<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataChromesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_chrome', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('Email');
            $table->integer('WordsPrimed');
            $table->integer('WordsSeen');
            $table->integer('WordsClicked');
            $table->integer('WordsSelected');
            $table->integer('AffectPrimed');
            $table->integer('AffectSeen');
            $table->integer('AffectClicked');
            $table->integer('AffectSelected');
            $table->integer('PageActiveTime');
            $table->dateTime('OpenTime');
            $table->dateTime('CloseTime');
            $table->integer('Priority');
            $table->string('URL');
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
        Schema::dropIfExists('data_chromes');
    }
}
