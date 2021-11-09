<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
    		$table->engine = "InnoDB"; 
    		$table->BigIncrements('id')->unique();
    		$table->unsignedBigInteger('article_id');
    		$table->foreign('article_id')->references('id')->on('article')->onUpdate("cascade");
    		$table->unsignedBigInteger('company_id');
   		    $table->foreign('company_id')->references('id')->on('companies')->onUpdate("cascade");
    		$table->decimal('price', 10,0);
    		$table->integer('stock');
    		//$table->string('color_name', 20);
    		//$table->decimal('weight', 10,0);
    		//$table->string('size', 10);
    		//$table->unsignedBigInteger('family_id');
    		//$table->foreign('family_id')->references('id')->on('families')->onUpdate("cascade");
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
        Schema::dropIfExists('products');
    }
}
