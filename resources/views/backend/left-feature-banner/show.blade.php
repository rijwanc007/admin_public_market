@extends('master')
@section('title', 'Index | left Feature Banner')
@section('ads_banner','active') @section('ads_banner_show','show') @section('left_feature_banner','active') @section('left_feature_banner_show','show')
@section('content')
    <div class="container">
        <h2 class="text-center text-info">
            Feature Banner Ads
            <p>{{date('d-F-Y', strtotime($show->date))}}</p>
            <hr style="" />
        </h2>

        <br />
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <img style="height: 150px;" src="{{asset('/assets/BackEnd/images/banner/'.$show->image)}}" class="img-thumbnail">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <table class="custom">
                            <tbody>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>{{$show->company_name}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="custom">
                            <tbody>
                            <tr>
                                <td>Title</td>
                                <td>:</td>
                                <td>{{$show->title}}</td>
                            </tr>
                            </tbody>
                        </table>
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
