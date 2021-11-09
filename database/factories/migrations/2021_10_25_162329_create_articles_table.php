<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id')->unique();
            $table->string('name', 50);
            $table->string('description', 150);
            $table->decimal('price_min', 10,0);
            $table->decimal('price_max', 10,0);
            $table->string('color_name', 20);
            $table->decimal('weight', 10,0);
            $table->string('size', 10);
            $table->unsignedbigInteger('family_id');
            $table->foreign('family_id')->references('id')->on('families')->onUpdate("cascade");
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
        Schema::dropIfExists('articles');
    }
}
