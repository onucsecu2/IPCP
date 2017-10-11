<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContestRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ContestRegister', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_name',100);
            $table->string('contestant1',100);
            $table->string('email1',100);
            $table->string('contestant2',100)->nullable();
            $table->string('email2',100)->nullable();
            $table->string('contestant3',100)->nullable();
            $table->string('email3',100)->nullable();
            $table->string('coach',100)->nullable();
            $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ContestRegister');
    }
}
