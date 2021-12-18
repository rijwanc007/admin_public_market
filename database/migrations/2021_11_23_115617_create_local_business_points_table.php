<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalBusinessPointsTable extends Migration
{

    public function up()
    {
        Schema::create('local_business_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->default(0)->nullable();
            $table->string('date')->default(0)->nullable();
            $table->string('title')->default(0)->nullable();
            $table->string('characteristic')->default(0)->nullable();
            $table->string('advantages')->default(0)->nullable();
            $table->string('challenges')->default(0)->nullable();
            $table->string('marketing')->default(0)->nullable();
            $table->string('contribution')->default(0)->nullable();
            $table->string('sources')->default(0)->nullable();
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
        Schema::dropIfExists('local_business_points');
    }
}
