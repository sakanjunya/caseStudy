<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->integer('researchability');
            $table->integer('student_id');
            $table->integer('teacher_id');
            $table->integer('social');
            $table->integer('reality');
            $table->integer('sociability');
            $table->integer('artisty');
            $table->dateTime('update_at')->useCurrent();
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
        //
    }
}
