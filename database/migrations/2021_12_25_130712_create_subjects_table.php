<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level_name');
            $table->timestamps();
        });


        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')
                  ->references('id')
                  ->on('levels')
                  ->onDelete('cascade');
            $table->string('subject_name');
            $table->timestamps();
        });

        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')
                  ->references('id')
                  ->on('subjects')
                  ->onDelete('cascade');
            $table->string('unit_name');
            $table->text('key_unit_competence');
            $table->timestamps();
        });

        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_id')->unsigned();
            $table->foreign('unit_id')
                  ->references('id')
                  ->on('units')
                  ->onDelete('cascade');
            $table->string('lesson_title');
            $table->text('objectives')->nullable();
            $table->text('teaching_resource')->nullable();
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
        Schema::dropIfExists('subjects');
        Schema::dropIfExists('levels');
        Schema::dropIfExists('units');
        Schema::dropIfExists('lessons');
    }
}
