<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_pages', function (Blueprint $table) {
            $table->id()->uniqid;
            $table->text('cover')->nullable();
            $table->text('cover_text_1')->nullable();
            $table->text('cover_text_2')->nullable();
            $table->integer('no_success_tours')->nullable();
            $table->integer('no_happy_tourist')->nullable();
            $table->integer('no_place_explored')->nullable();
            $table->text('tourist_feedback')->nullable();
            $table->text('tourist_name')->nullable();
            $table->text('tourist_title')->nullable();
            
            
            

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
        Schema::dropIfExists('index_pages');
    }
}
