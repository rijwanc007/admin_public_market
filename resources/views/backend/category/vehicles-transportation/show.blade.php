@extends('master')
@section('title', 'Show | Vehicles & Transportation')
@section('ads','active') @section('ads_show','show') @section('vehicles_transportation','active') @section('vehicles_transportation_show','show')
@section('content')
    <div class="container">
        <h2 class="text-center text-info">
            Vehicles & Transportation Ads Information
            <p>{{date('d-F-Y', strtotime($show->date))}}</p>
            <hr style="" />
        </h2>

        <br />
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    @forelse($show->image as $image)
                        <div class="col-md-3">
                            <img style="height: 150px;" src="{{asset('/assets/BackEnd/images/product/'.$image)}}" class="img-thumbnail">
                        </div>
                    @empty
                        <div class="col-md-3">
                            <h3>No Images</h3>
                        </div>
                    @endforelse

                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mt-2">{{$show->title}}</p>
                    </div>
                    <div class="col-md-6">
                        <table class="custom">
                            <tbody>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>{{$show->product_name}}</td>
                            </tr>
                            <tr>
                                <td>Brand</td>
                                <td>:</td>
                                <td>{{$show->brand}}</td>
                            </tr>
                            <tr>
                                <td>Model</td>
                                <td>:</td>
                                <td>{{$show->model}}</td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td>:</td>
                                <td>{{$show->color}}</td>
                            </tr>
                            <tr>
                                <td>Condition</td>
                                <td>:</td>
                                <td>{{$show->condition}}</td>
                            </tr>
                            <tr>
                                <td>Edition</td>
                                <td>:</td>
                                <td>{{$show->edition}}</td>
                            </tr>
                            <tr>
                                <td>Year of manufacture</td>
                                <td>:</td>
                                <td>{{$show->year_of_manufacture}}</td>
                            </tr>
                            <tr>
                                <td>Engine capacity</td>
                                <td>:</td>
                                <td>{{$show->engine_capacity}}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td>{{$show->price}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="custom">
                            <tbody>
                            <tr>
                                <td>Kilometers run</td>
                                <td>:</td>
                                <td>{{$show->kilometers_run}}</td>
                            </tr>
                            <tr>
                                <td>Segment</td>
                                <td>:</td>
                                <td>{{$show->segment}}</td>
                            </tr>
                            <tr>
                                <td>Wheel size</td>
                                <td>:</td>
                                <td>{{$show->wheel_size}}</td>
                            </tr>
                            <tr>
                                <td>Item Type</td>
                                <td>:</td>
                                <td>{{$show->item_type}}</td>
                            </tr>
                            <tr>
                                <td>Others</td>
                                <td>:</td>
                                <td>{{$show->others}}</td>
                            </tr>
                            <tr>
                                <td>Price On Call</td>
                                <td>:</td>
                                <td>{{($show->price_on_call==1) ? 'Yes':'No'}}</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>:</td>
                                <td>{{($show->location==0) ? 'N/A':$show->location}}</td>
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
