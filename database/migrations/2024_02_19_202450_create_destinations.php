<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->text('Country');
            $table->text('cover');
            $table->text('name_of_hotel')->nullable();
            $table->text('description');
            $table->text('includes');
            $table->text('not_includes')->nullable();
            $table->text('children_policy');
            $table->text('guest_national')->nullable();
            $table->date('date_start');
            $table->date("date_to");
            $table->text('price_single_double')->nullable();
            $table->integer('no_days');
            $table->text('program');
            $table->boolean('show_trip')->nullable();
            $table->text('price_cover');
            $table->boolean('sold_out')->nullable();
            
           
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
        Schema::dropIfExists('destinations');
    }
}
