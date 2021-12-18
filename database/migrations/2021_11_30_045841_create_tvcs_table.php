<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvcsTable extends Migration
{

    public function up()
    {
        Schema::create('tvcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->default(0)->nullable();
            $table->string('date')->default(0)->nullable();
            $table->string('company_name')->default(0)->nullable();
            $table->string('tvc_title')->default(0)->nullable();
            $table->longText('description')->default(0)->nullable();
            $table->string('video')->default(0)->nullable();
            $table->string('location')->default(0)->nullable();
            $table->string('approve')->default(0)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tvcs');
    }
}
