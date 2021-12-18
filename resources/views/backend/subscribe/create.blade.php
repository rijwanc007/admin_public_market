@extends('master')
@section('title', 'Create | Subscribe')
@section('subscribe','active') @section('subscribe_show','show') @section('subscribe_create','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'subscribe.store','method' => 'POST']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-file-document-box"></i></span> Add New Subscribe</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name"> Email :</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="custom_button"><i class="mdi mdi-file-document-box"></i> Subscribe</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
