<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacancyAnnouncementsTable extends Migration
{

    public function up()
    {
        Schema::create('vacancy_announcements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->default(0)->nullable();
            $table->string('date')->default(0)->nullable();
            $table->string('company_name')->default(0)->nullable();
            $table->string('position')->default(0)->nullable();
            $table->integer('vacancy')->default(0)->nullable();
            $table->string('qualification_requirement')->default(0)->nullable();
            $table->string('job_location')->default(0)->nullable();
            $table->string('employment_status')->default(0)->nullable();
            $table->string('workplace')->default(0)->nullable();
            $table->integer('salary')->default(0)->nullable();
            $table->string('experience_requirement')->default(0)->nullable();
            $table->string('fresher_encouraged')->default(0)->nullable();
            $table->longText('description')->default(0)->nullable();
            $table->longText('job_context')->default(0)->nullable();
            $table->longText('responsibility_description')->default(0)->nullable();
            $table->longText('additional_requirements')->default(0)->nullable();
            $table->longText('compensation_other_benefits')->default(0)->nullable();
            $table->string('perks')->default(0)->nullable();
            $table->string('location')->default(0)->nullable();
            $table->string('approve')->default(0)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vacancy_announcements');
    }
}
