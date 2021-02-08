<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //Created an auto=increment big integer(PK)
            $table->id();
            $table->string('rental_name', 255);
            $table->string('rental_address', 255);
            $table->string('rental_neighborhood', 255);
            $table->string('rental_description', 1000);
            $table->double('rental_cost');
            $table->string('rental_image', 255);
            $table->boolean('rental_current');
            $table->unsignedBigInteger('rental_user');
            $table->foreign('rental_user')->references('id')->on('users');
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
        Schema::dropIfExists('rentals');
    }
}
