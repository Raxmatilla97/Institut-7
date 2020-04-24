<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posters', function (Blueprint $table) {
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kafedra_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kafedra_id')->references('id')->on('kafedralar');
            $table->foreign('category_id')->references('id')->on('poster_categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posters', function (Blueprint $table) {
            $table->unsignedBigInteger('kafedra_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('kafedra_id')->references('id')->on('kafedralar');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('poster_categories');
        });
    }
}
