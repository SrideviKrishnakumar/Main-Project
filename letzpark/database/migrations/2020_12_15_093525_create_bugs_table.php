<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateBugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('bugs', function(Blueprint $table){
        $table->engine = 'InnoDB'; 
         $table->id(); 
         $table->string('bugs_subject', 1000); 
         $table->string('bugs_message', 1000); 
         $table->string('bugs_screenshot', 255); 
         $table->unsignedBigInteger('bugs_user');
         $table->foreign('bugs_User')->references('id')->on('users'); 
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
        Schema::dropIfExists('bugs'); 
    }
}
