<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exercises', function (Blueprint $table){
            $table->foreign('body_part_id')->references('id')->on('bodies');
            $table->foreign('exercise_type_id')->references('id')->on('types');
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->foreign('difficulty_id')->references('id')->on('difficulties');
            $table->foreign('generation_id')->references('id')->on('generations');
            $table->foreign('author_id')->references('id')->on('users');
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
