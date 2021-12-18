@extends('master')
@section('title', 'Create | Vacancy Announcement')
@section('job_bank','active') @section('job_bank_show','show') @section('vacancy_announcement','active') @section('vacancy_announcement_show','show') @section('vacancy_announcement_create','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'vacancy-announcement.store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-paperclip"></i></span> Add New Vacancy Announcement</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="phone">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name Of The Company</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Name Of The Company" required>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Name Of The Position</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="Enter Name Of The Position" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Vacancy</label>
                        <input type="text" class="form-control" id="vacancy" name="vacancy" placeholder="Enter Vacancy">
                    </div>
                    <div class="form-group">
                        <label for="email">Qualification Requirement</label>
                        <input type="text" class="form-control" id="qualification_requirement" name="qualification_requirement" placeholder="Enter Qualification Requirement">
                    </div>
                    <div class="form-group">
                        <label for="email">Job Location</label>
                        <input type="text" class="form-control" id="job_location" name="job_location" placeholder="Enter Job Location" >
                    </div>
                    <div class="form-group">
                        <label for="email">Employment Status</label>
                        <input type="text" class="form-control" id="employment_status" name="employment_status" placeholder="Enter Employment Status" >
                    </div>
                    <div class="form-group">
                        <label for="email">Workplace</label>
                        <input type="text" class="form-control" id="workplace" name="workplace" placeholder="Enter workplace" >
                    </div>
                    <div class="form-group">
                        <label for="email">Salary</label>
                        <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary" >
                    </div>
                    <div class="form-group">
                        <label for="email">Experience Requirement</label>
                        <input type="text" class="form-control" id="experience_requirement" name="experience_requirement" placeholder="Enter Experience Requirement" >
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="fresher_encouraged" id="fresher_encouraged" value="1">
                        <label for="checkbox"></label>
                        <span>Fresher's Encouraged</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Company Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Job Context</label>
                        <textarea class="form-control" id="job_context" name="job_context" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Responsibility Description</label>
                        <textarea class="form-control" id="responsibility_description" name="responsibility_description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Additional Requirements</label>
                        <textarea class="form-control" id="additional_requirements" name="additional_requirements" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Compensation & Other Benefits</label>
                        <textarea class="form-control" id="compensation_other_benefits" name="compensation_other_benefits" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Perks</label>
                        <p id="append_item"></p>
                        <select class="form-control response" id="perks" data-response="perks">
                            <option>Please select Perks</option>
                            <option value="Festival Bonus">Festival Bonus</option>
                            <option value="Subsidized Lunch">Subsidized Lunch</option>
                            <option value="Unlimited Snacks">Unlimited Snacks</option>
                            <option value="Performance Bonus">Performance Bonus</option>
                            <option value="Monthly Awards">Monthly Awards</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="custom_button"><i class="mdi mdi-paperclip"></i> Create </button>
        </div>
    </div>
    {!! Form::close() !!}

    <script>
        function _(x){
            return document.getElementById(x);
        }

        $(document).on('change','.response',function(){
            let value = $(this).val();
            let response = $(this).data('response');
            if(response == 'perks'){
                //console.log(true);
                let html = '';
                html += ' <span>'+value+' <a style="cursor: pointer;" class="remove"><i class="mdi mdi-close"></i></a>' +
                    '<input type="hidden" name="perks[]" value="'+value+'">'+
                        '</span>'

                $('#append_item').append(html);
            }
        });
       $(document).on('click','.remove',function(){
           $(this).parent().remove();
       })
    </script>

@endsection
