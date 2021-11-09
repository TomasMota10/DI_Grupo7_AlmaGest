<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainArtDelivlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contain_art_delivlines', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on('article')->onUpdate("cascade");
            $table->unsignedBigInteger('delivery_lines_id');
            $table->foreign('delivery_lines_id')->references('id')->on('delivery_note_lines')->onUpdate("cascade");
            $table->tinyInteger('deleted');
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
        Schema::dropIfExists('contain_art_delivlines');
    }
}
