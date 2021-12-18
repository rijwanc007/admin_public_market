@extends('master')
@section('title', 'Create | Personal Advertisement')
@section('ads','active') @section('ads_show','show') @section('personal_advertisement','active') @section('personal_advertisement_show','show') @section('personal_advertisement_create','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'personal-advertisement.store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-paperclip"></i></span> Add New Personal Advertisement</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="phone">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone" >
                    </div>
                    <div class="form-group">
                        <label for="email">Education</label>
                        <input type="text" class="form-control" id="education" name="education" placeholder="Enter education" >
                    </div>
                    <div class="form-group">
                        <label for="email">Training</label>
                        <input type="text" class="form-control" id="training" name="training" placeholder="Enter training" >
                    </div>
                    <div class="form-group">
                        <label for="email">Current position</label>
                        <input type="text" class="form-control" id="current_position" name="current_position" placeholder="Enter current position" >
                    </div>
                    <div class="form-group">
                        <label for="email">Country/Region</label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="Enter country" >
                    </div>
                    <div class="form-group">
                        <label for="email">City/District</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gender</label>
                        <select class="form-control" id="condition" name="gender">
                            <option>Please select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Experience</label>
                        <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter experience" >
                    </div>
                    <div class="form-group">
                        <label for="email">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" >
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="price_on_call" id="price_on_call" value="1">
                        <label for="checkbox"></label>
                        <span>Price On Call</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Photo</label>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="file" class="form-control" id="image" name="image[]" accept=".png, .jpg, .jpeg">
                            </div>
                            <div class="col-md-6">
                                <input type="file" class="form-control" id="image" name="image[]" accept=".png, .jpg, .jpeg">
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="file" class="form-control" id="image" name="image[]" accept=".png, .jpg, .jpeg">
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="file" class="form-control" id="image" name="image[]" accept=".png, .jpg, .jpeg">
                            </div>
                            <div class="col-md-6 mt-2">
                                <input type="file" class="form-control" id="image" name="image[]" accept=".png, .jpg, .jpeg">
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
