<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLastinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lastinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('moduleName');
            $table->string('moduleCode');
            $table->string('year');
            $table->string('paperTitle');
            $table->string('element');
            $table->string('marker');
            $table->string('markerEmail');
            $table->string('moderator');

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
        Schema::dropIfExists('lastinfos');
    }
}
