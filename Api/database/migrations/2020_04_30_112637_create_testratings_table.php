<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestratingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testrating', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->integer('Choice1');
            $table->integer('Choice2');
            $table->integer('Choice3');
            $table->integer('Choice4');
            $table->integer('Choice5');
            $table->integer('Choice6');
            $table->integer('Choice7');
            $table->integer('Choice8');
            $table->integer('Choice9');
            $table->integer('Choice10');
            $table->integer('Choice11');
            $table->integer('Choice12');
            $table->integer('Choice13');
            $table->integer('Choice14');
            $table->integer('Choice15');
            $table->integer('Choice16');
            $table->integer('Choice17');
            $table->integer('Choice18');
            $table->integer('Choice19');
            $table->integer('Choice20');
            $table->integer('Choice21');
            $table->integer('Choice22');
            $table->integer('Choice23');
            $table->integer('Choice24');
            $table->integer('Choice25');
            $table->integer('Choice26');
            $table->integer('Choice27');
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
        Schema::dropIfExists('testratings');
    }
}
