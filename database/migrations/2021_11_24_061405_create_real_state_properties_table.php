<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealStatePropertiesTable extends Migration
{

    public function up()
    {
        Schema::create('real_state_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->default(0)->nullable();
            $table->string('date')->default(0)->nullable();
            $table->string('title')->default(0)->nullable();
            $table->string('beds')->default(0)->nullable();
            $table->string('baths')->default(0)->nullable();
            $table->string('land_size')->default(0)->nullable();
            $table->string('land_size_unit')->default(0)->nullable();
            $table->string('address')->default(0)->nullable();
            $table->string('house_size')->default(0)->nullable();
            $table->string('house_size_unit')->default(0)->nullable();
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
        Schema::dropIfExists('real_state_properties');
    }
}
