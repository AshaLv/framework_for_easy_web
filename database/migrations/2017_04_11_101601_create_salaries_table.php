<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'salaries',
            function(Blueprint $table){
                $table->increments('id');
                $table->integer('user_id');
                $table->foreign('user_id')->references('id')->on('users');
                $table->integer('time');
                $table->integer('salary');
                $table->string('date');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
