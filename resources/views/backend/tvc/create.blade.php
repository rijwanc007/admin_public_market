@extends('master')
@section('title', 'Create | TVC')
@section('tvc','active') @section('tvc_show','show') @section('tvc_create','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'tvc.store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-paperclip"></i></span> Add New Tvc Ads</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="phone">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name Of The Company</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Name" required>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">TVC Title</label>
                        <input type="text" class="form-control" id="tvc_title" name="tvc_title" placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload Video</label>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="file" class="form-control" id="video" name="video" accept=".mp4, .dat, .mkv, .mov, .WMV, .FLV, .AVI">
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
