@extends('master')
@section('title', 'Show | Vacancy Announcement')
@section('job_bank','active') @section('job_bank_show','show') @section('vacancy_announcement','active') @section('vacancy_announcement_show','show')
@section('content')
    <div class="container">
        <h2 class="text-center text-info">
            Vacancy Announcement
            <p>{{date('d-F-Y', strtotime($show->date))}}</p>
            <hr style="" />
        </h2>

        <br />
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="mt-2">{{$show->position}}</h4>
                        <p class="mb-4">{{$show->company_name}}</p>
                    </div>
                    <div class="col-md-6">
                        <table class="custom">
                            <tbody>
                            <tr>
                                <td>Salary</td>
                                <td>:</td>
                                <td>{{$show->salary}}</td>
                            </tr>
                            <tr>
                                <td>Vacancy</td>
                                <td>:</td>
                                <td>{{$show->vacancy}}</td>
                            </tr>
                            <tr>
                                <td>Job Location</td>
                                <td>:</td>
                                <td>{{$show->job_location}}</td>
                            </tr>
                            <tr>
                                <td>Qualification Requirement</td>
                                <td>:</td>
                                <td>{{$show->qualification_requirement}}</td>
                            </tr>
                            <tr>
                                <td>Perks</td>
                                <td>:</td>
                                <td>
                                    @for($i = 0 ; $i<count($show->perks) ; $i++)
                                        {{$show->perks[$i]}},
                                    @endfor
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="custom">
                            <tbody>
                            <tr>
                                <td>Workplace</td>
                                <td>:</td>
                                <td>{{$show->workplace}}</td>
                            </tr>
                            <tr>
                                <td>Experience Requirement</td>
                                <td>:</td>
                                <td>{{$show->experience_requirement}}</td>
                            </tr>
                            <tr>
                                <td>Fresher Encouraged</td>
                                <td>:</td>
                                <td>{{($show->fresher_encouraged == 1) ? 'Fresher Encouraged':'N/A'}}</td>
                            </tr>
                            <tr>
                                <td>Employment Status</td>
                                <td>:</td>
                                <td>{{$show->employment_status}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h6 class="text-center">Job Context</h6>
                        <p style="text-align: justify;">{{$show->job_context}}</p>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h6 class="text-center">Responsibility Description</h6>
                        <p style="text-align: justify;">{{$show->responsibility_description}}</p>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h6 class="text-center">Additional Requirements</h6>
                        <p style="text-align: justify;">{{$show->additional_requirements}}</p>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h6 class="text-center">Compensation Other Benefits</h6>
                        <p style="text-align: justify;">{{$show->compensation_other_benefits}}</p>
                    </div>
                    <div class="col-md-12 mt-4">
                        <h6 class="text-center">Description</h6>
                        <p style="text-align: justify;">{{$show->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
