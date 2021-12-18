@extends('master')
@section('title', 'Create | Cv Bank')
@section('job_bank','active') @section('job_bank_show','show') @section('cv_upload','active') @section('cv_upload_show','show') @section('cv_upload_create','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'cv-upload.store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-paperclip"></i></span> Add New Cv</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="phone">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name" required>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Expected Salary</label>
                        <input type="text" class="form-control" id="expected_salary" name="expected_salary" placeholder="Enter expected salary" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Cv (pdf file)</label>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="file" class="form-control" id="image" name="file" accept=".pdf">
                            </div>
                        </div>
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
@endsection
