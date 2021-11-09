<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainArtInvlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contain_art_invlines', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on('article')->onUpdate("cascade");
            $table->unsignedBigInteger('invoice_line_id');
            $table->foreign('invoice_line_id')->references('id')->on('invoice_lines')->onUpdate("cascade");
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
        Schema::dropIfExists('contain_art_invlines');
    }
}
