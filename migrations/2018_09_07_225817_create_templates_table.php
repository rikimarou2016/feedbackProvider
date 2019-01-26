<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paperTitle');
            $table->string('markedElementOne');
            $table->string('scoreOne');
            $table->string('markedElementTwo');
            $table->string('scoreTwo');
//
            $table->integer('staffmembers_id')->unsigned();
            $table->foreign('staffmembers_id')->references('id')->on('staffmembers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templates');
    }
}
