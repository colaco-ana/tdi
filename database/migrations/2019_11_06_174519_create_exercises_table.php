<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('image')->nullable();
            $table->integer('duration')->unsigned();
            $table->bigInteger('body_part_id')->unsigned();
            $table->bigInteger('exercise_type_id')->unsigned();
            $table->bigInteger('recipe_id')->unsigned()->nullable();
            $table->bigInteger('difficulty_id')->unsigned();
            $table->bigInteger('generation_id')->unsigned();
            $table->bigInteger('author_id')->unsigned();
            $table->timestamp('review')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercises');
    }
}
