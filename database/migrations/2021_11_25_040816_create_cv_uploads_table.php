<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvUploadsTable extends Migration
{

    public function up()
    {
        Schema::create('cv_uploads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->default(0)->nullable();
            $table->string('date')->default(0)->nullable();
            $table->string('first_name')->default(0)->nullable();
            $table->string('last_name')->default(0)->nullable();
            $table->string('email')->default(0)->nullable();
            $table->string('phone')->default(0)->nullable();
            $table->string('expected_salary')->default(0)->nullable();
            $table->string('file')->default(0)->nullable();
            $table->string('location')->default(0)->nullable();
            $table->string('approve')->default(0)->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('cv_uploads');
    }
}
