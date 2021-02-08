<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('reviews_subject');
            $table->string('reviews_message');
            $table->integer('reviews_stars');
            $table->unsignedBigInteger('reviews_parking');
            $table->unsignedBigInteger('reviews_user');
            $table->foreign('reviews_user')->references('id')->on('users');
            $table->foreign('reviews_parking')->references('id')->on('rentals');

            //Created an autoIncrement Big Integer PK 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('reviews');
    }
}
