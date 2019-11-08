<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('preparation_mode');
            $table->string('ingredients');
            $table->integer('portion')->unsigned();
            $table->integer('duration')->unsigned();
            $table->boolean('gluten_free');
            $table->boolean('lactose_free');
            $table->boolean('vegan');
            $table->boolean('vegetariano');
            $table->boolean('paleo');
            $table->bigInteger('difficulty_id')->unsigned();
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
        Schema::dropIfExists('recipes');
    }
}
