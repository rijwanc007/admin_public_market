<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacancyAnnouncement extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'company_name',
        'position',
        'vacancy',
        'qualification_requirement',
        'job_location',
        'employment_status',
        'workplace',
        'salary',
        'experience_requirement',
        'fresher_encouraged',
        'description',
        'job_context',
        'responsibility_description',
        'additional_requirements',
        'compensation_other_benefits',
        'perks',
        'location',
        'approve',
    ];

    protected $table='vacancy_announcements';
}
