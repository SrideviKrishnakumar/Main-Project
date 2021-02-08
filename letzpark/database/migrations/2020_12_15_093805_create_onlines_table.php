<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlines', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->timestamp('start_Session');
            $table->timestamp('end_Session')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('onlines_user');
            $table->foreign('onlines_user')->references('id')->on('users');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('onlines');
    }
}
