@extends('master')
@section('title', 'Show | Ads Pricing')
@section('ads_pricing','active') @section('ads_pricing_show','show') @section('ads_pricing','active') @section('ads_pricing_index','active')
@section('content')
    <div class="container">
        <h2 class="text-center text-info">
            Ads Pricing Information
            <p>{{date('d-F-Y', strtotime($show->date))}}</p>
            <hr style="" />
        </h2>

        <br />
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <p>{{$show->title}}</p>
                        <p>{{$show->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
@endsection
