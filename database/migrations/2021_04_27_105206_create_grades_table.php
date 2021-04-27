<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lecture_id');
            $table->unsignedBigInteger('student_id');
            $table->integer('grade');
            $table->timestamps();
                                             
        });

        Schema::table('grades', function (Blueprint $table) {
            
            $table->foreign('lecture_id')->references('id')->on('lectures')
            ->onDelete('cascade')
            ->onUpdate('restrict');  
            $table->foreign('student_id')->references('id')->on('students')
            ->onDelete('cascade')
            ->onUpdate('restrict'); 
                      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
