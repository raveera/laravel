<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysregisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companysregister', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('repassword');
            $table->string('namecom');
            $table->string('address');
            $table->string('detail');
            $table->string('tel');
            $table->string('email');
            $table->string('num');
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
        Schema::dropIfExists('companysregister');
    }
}
