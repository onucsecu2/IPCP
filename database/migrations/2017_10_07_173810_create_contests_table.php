<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->increments('id');
            $table->text('contest_name');
            $table->text('contest_desc');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('prob_1')->nullable();
            $table->integer('prob_2')->nullable();
            $table->integer('prob_3')->nullable();
            $table->integer('prob_4')->nullable();
            $table->integer('prob_5')->nullable();
            $table->integer('prob_6')->nullable();
            $table->integer('prob_7')->nullable();
            $table->integer('prob_8')->nullable();
            $table->integer('prob_9')->nullable();
            $table->integer('prob_10')->nullable();
            $table->integer('prob_11')->nullable();
            $table->integer('prob_12')->nullable();
            $table->integer('prob_13')->nullable();
            $table->integer('prob_14')->nullable();
            $table->integer('prob_15')->nullable();
            $table->integer('prob_16')->nullable();
            $table->integer('prob_17')->nullable();
            $table->integer('prob_18')->nullable();
            $table->integer('prob_19')->nullable();
            $table->integer('prob_20')->nullable();
            $table->integer('prob_21')->nullable();
            $table->integer('prob_22')->nullable();
            $table->integer('prob_23')->nullable();
            $table->integer('prob_24')->nullable();
            $table->integer('prob_25')->nullable();
            $table->integer('prob_26')->nullable();

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
        Schema::dropIfExists('contests');
    }
}
