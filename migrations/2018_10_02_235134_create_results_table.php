<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {

                $table->increments('id');
                $table->string('sid');
                $table->string('mark');
                $table->string('mark2');
                $table->string('textAreaOne',255);
                $table->string('textAreaTwo',255);

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
        Schema::dropIfExists('results');
    }
}
