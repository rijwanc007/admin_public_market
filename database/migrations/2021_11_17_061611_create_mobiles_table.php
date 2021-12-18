<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilesTable extends Migration
{

    public function up()
    {
        Schema::create('mobiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->default(0)->nullable();
            $table->string('date')->default(0)->nullable();
            $table->string('title')->default(0)->nullable();
            $table->string('product_name')->default(0)->nullable();
            $table->string('brand')->default(0)->nullable();
            $table->string('condition')->default(0)->nullable();
            $table->string('processor')->default(0)->nullable();
            $table->string('storage')->default(0)->nullable();
            $table->string('color')->default(0)->nullable();
            $table->string('battery')->default(0)->nullable();
            $table->string('charging_power')->default(0)->nullable();
            $table->string('display')->default(0)->nullable();
            $table->string('camera')->default(0)->nullable();
            $table->string('connectivity')->default(0)->nullable();
            $table->string('feature')->default(0)->nullable();
            $table->string('weight')->default(0)->nullable();
            $table->string('price')->default(0)->nullable();
            $table->string('others')->default(0)->nullable();
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
        Schema::dropIfExists('mobiles');
    }
}
