@extends('master')
@section('title', 'Create | District')
@section('district','active') @section('district_show','show') @section('district_create','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'district.store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-paperclip"></i></span> Add District</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">District Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter district name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Division</label>
                        <select class="form-control" id="division_id" name="division_id">
                            <option disabled selected value="">Choose an option</option>
                            @foreach($divisions as $division)
                            <option value="{{$division->id}}">{{$division->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select_role" >Upload Division Photo :</label>
                        <input type='file' class="form-control" id="imageUpload" name="image" accept=".png, .jpg, .jpeg" required/>
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
