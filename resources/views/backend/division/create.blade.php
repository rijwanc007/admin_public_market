@extends('master')
@section('title', 'Create | Division')
@section('division','active') @section('division_show','show') @section('division_create','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'division.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-file-document-box"></i></span> Add New Division</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"> Division Name :</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Division Name" required>
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
            <button type="submit" class="custom_button"><i class="mdi mdi-file-document-box"></i> Create Division</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
