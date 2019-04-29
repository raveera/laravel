<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_models', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('name');
            $table->string('detail');
            $table->string('number');
            $table->string('address');
            $table->string('tel');
            $table->string('name_mentor');
            $table->string('tel_mentor');
            $table->string('email');
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
        Schema::dropIfExists('company_models');
    }
}
