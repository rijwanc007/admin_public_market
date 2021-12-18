@extends('master')
@section('title', 'Edit | Ads Pricing')
@section('ads_pricing','active') @section('ads_pricing_show','show') @section('ads_pricing','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => ['ads-pricing.update',$edit->id],'method' => 'PATCH','enctype'=>'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-paperclip"></i></span> Update Ads Pricing</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="phone">Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{$edit->date}}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$edit->title}}" required>
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5">{{$edit->description}}</textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="custom_button"><i class="mdi mdi-paperclip"></i> Update </button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
