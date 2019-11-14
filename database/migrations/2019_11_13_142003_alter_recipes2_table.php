<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRecipes2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recipes', function (Blueprint $table){
            $table->boolean('gluten_free')->default(false)->change();
            $table->boolean('lactose_free')->default(false)->change();
            $table->boolean('vegan')->default(false)->change();
            $table->boolean('vegetariano')->default(false)->change();
            $table->boolean('paleo')->default(false)->change();
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
