<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text('description')->nullable();
            $table->integer('nb_occurence')->default(0);

            $table->bigInteger('theme_id')->unsigned();
            $table->foreign('theme_id')->references('id')->on('themes')->onDelete('cascade');

            $table->integer('game_id')->nullable();
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
        Schema::dropIfExists('words');
    }
};
