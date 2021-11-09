<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id')->unique();
            $table->string('name', 50);
            $table->string('address', 100);
            $table->string('city', 50);
            $table->string('cif', 10);
            $table->string('email', 40);
            $table->string('phone', 9);
            $table->unsignedBigInteger('del_term_id');
            $table->foreign('del_term_id')->references('id')->on('delivery_terms')->onUpdate("cascade");
            $table->unsignedBigInteger('transport_id');
            $table->foreign('transport_id')->references('id')->on('transports')->onUpdate("cascade");
            $table->unsignedBigInteger('payment_term_id');
            $table->foreign('payment_term_id')->references('id')->on('payment_terms')->onUpdate("cascade");
            $table->unsignedBigInteger('bank_entity_id');
            $table->foreign('bank_entity_id')->references('id')->on('bank_entity')->onUpdate("cascade");
            $table->unsignedBigInteger('discount_id');
            $table->foreign('discount_id')->references('id')->on('discount')->onUpdate("cascade");
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
        Schema::dropIfExists('companies');
    }
}
