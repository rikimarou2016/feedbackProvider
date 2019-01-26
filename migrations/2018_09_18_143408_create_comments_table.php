<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shortCommentOne',255);
            $table->string('longCommentOne',255);

            $table->string('shortCommentTwo',255);
            $table->string('longCommentTwo',255);

            $table->string('shortCommentThree',255);
            $table->string('longCommentThree',255);

            $table->string('shortCommentFour',255);
            $table->string('longCommentFour',255);

            $table->string('shortCommentFive',255);
            $table->string('longCommentFive',255);

            $table->string('shortCommentSix',255);
            $table->string('longCommentSix',255);

            $table->string('shortCommentSeven',255);
            $table->string('longCommentSeven',255);

            $table->string('shortCommentEight',255);
            $table->string('longCommentEight',255);

            $table->string('shortCommentNine',255);
            $table->string('longCommentNine',255);

            $table->string('shortCommentTen',255);
            $table->string('longCommentTen',255);

            $table->integer('templates_id')->unsigned();
            $table->foreign('templates_id')->references('id')->on('templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
