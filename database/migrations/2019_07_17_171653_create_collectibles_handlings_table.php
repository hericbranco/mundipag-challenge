<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectiblesHandlingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectibles_handlings', function(Blueprint $table){
            $table->increments('id');
            $table->integer('contact_id')->unsigned();
            $table->integer('collectible_id')->unsigned();            
            $table->enum('status', ['lent', 'returned'])->default('lent');
            $table->timestamps();
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->foreign('collectible_id')->references('id')->on('collectibles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collectibles_handlings');
    }
}
