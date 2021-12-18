<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAdvertisementsTable extends Migration
{

    public function up()
    {
        Schema::create('personal_advertisements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->default(0)->nullable();
            $table->string('date')->default(0)->nullable();
            $table->string('title')->default(0)->nullable();
            $table->string('name')->default(0)->nullable();
            $table->string('email')->default(0)->nullable();
            $table->string('phone')->default(0)->nullable();
            $table->string('education')->default(0)->nullable();
            $table->string('training')->default(0)->nullable();
            $table->string('current_position')->default(0)->nullable();
            $table->string('country')->default(0)->nullable();
            $table->string('city')->default(0)->nullable();
            $table->string('gender')->default(0)->nullable();
            $table->string('experience')->default(0)->nullable();
            $table->string('price')->default(0)->nullable();
            $table->longText('description')->default(0)->nullable();
            $table->string('price_on_call')->default(0)->nullable();
            $table->string('image')->default(0)->nullable();
            $table->string('location')->default(0)->nullable();
            $table->string('approve')->default(0)->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('personal_advertisements');
    }
}
