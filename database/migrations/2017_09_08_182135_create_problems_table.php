<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->increments('id');
            $table->char('problem',1);
            $table->int('contest_id');
            $table->text('problem_name');
            $table->Integer('time_limit');
            $table->Integer('memory_limit');
            $table->text('problem_description');
            $table->text('in_txt');
            $table->text('out_txt');
            $table->text('solution_txt');
            $table->text('submitted_by');
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
        Schema::dropIfExists('problems');
    }
}

