@extends('master')
@section('title', 'Show | Personal Advertisement')
@section('ads','active') @section('ads_show','show') @section('personal_advertisement','active') @section('personal_advertisement_show','show')
@section('content')
    <div class="container">
        <h2 class="text-center text-info">
            Personal Advertisement Ads Information
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
                                <td>{{$show->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{$show->email}}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>:</td>
                                <td>{{$show->phone}}</td>
                            </tr>
                            <tr>
                                <td>Education</td>
                                <td>:</td>
                                <td>{{$show->education}}</td>
                            </tr>
                            <tr>
                                <td>Training</td>
                                <td>:</td>
                                <td>{{$show->training}}</td>
                            </tr>
                            <tr>
                                <td>Current Position</td>
                                <td>:</td>
                                <td>{{$show->current_position}}</td>
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
                                <td>City</td>
                                <td>:</td>
                                <td>{{$show->city}}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:</td>
                                <td>{{$show->gender}}</td>
                            </tr>
                            <tr>
                                <td>Experience</td>
                                <td>:</td>
                                <td>{{$show->experience}}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>:</td>
                                <td>{{$show->city}}</td>
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
                            <tr>
                                <td>Country</td>
                                <td>:</td>
                                <td>{{$show->country}}</td>
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
