<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataChromepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_chromep', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->integer('Activity_ID');
            $table->string('Word');
            $table->integer('Primed');
            $table->integer('Seen');
            $table->integer('Clicked');
            $table->integer('Selected');
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
        Schema::dropIfExists('data_chromeps');
    }
}
