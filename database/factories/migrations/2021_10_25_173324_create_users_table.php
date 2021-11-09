<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id')->unique();
            $table->string('firstname',15);
            $table->string('secondname',50);
            $table->string('email',40)->unique();
            $table->string('password',191);
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate("cascade");
            $table->string('type',1)->default('U');
            $table->tinyInteger('email_confirmed')->default(0);
            $table->tinyInteger('actived')->default(0);
            $table->tinyInteger('iscontact')->default(0);
            $table->tinyInteger('deleted')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
