@extends('master')
@section('title', 'Create | Vehicles & Transportation')
@section('ads','active') @section('ads_show','show') @section('vehicles_transportation','active') @section('vehicles_transportation_show','show') @section('vehicles_transportation_create','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'vehicles-transportation.store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-paperclip"></i></span> Add Vehicles & Transportation</h3></div>
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
                        <label for="phone">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter brand">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Condition select</label>
                        <select class="form-control" id="condition" name="condition">
                            <option>Please select condition</option>
                            <option value="1">New</option>
                            <option value="2">Used</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Model</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Enter model">
                    </div>
                    <div class="form-group">
                        <label for="email">Trim / Edition</label>
                        <input type="text" class="form-control" id="edition" name="edition" placeholder="Enter edition">
                    </div>
                    <div class="form-group">
                        <label for="email">Year of Manufacture</label>
                        <input type="text" class="form-control" id="year_of_manufacture" name="year_of_manufacture" placeholder="Enter year">
                    </div>
                    <div class="form-group">
                        <label for="email">Kilometers run (km)</label>
                        <input type="text" class="form-control" id="kilometers_run" name="kilometers_run" placeholder="Enter km">
                    </div>
                    <div class="form-group">
                        <label for="email">Engine capacity (cc)</label>
                        <input type="text" class="form-control" id="engine_capacity" name="engine_capacity" placeholder="Enter capacity">
                    </div>
                    <div class="form-group">
                        <label for="email">Segment</label>
                        <input type="text" class="form-control" id="segment" name="segment" placeholder="Enter segment">
                    </div>
                    <div class="form-group">
                        <label for="email">Wheel Size</label>
                        <input type="text" class="form-control" id="wheel_size" name="wheel_size" placeholder="Enter wheel size">
                    </div>
                    <div class="form-group">
                        <label for="email">Color</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder="Enter color" >
                    </div>
                    <div class="form-group">
                        <label for="email">Item Type</label>
                        <input type="text" class="form-control" id="item_type" name="item_type" placeholder="Enter type" >
                    </div>
                    <div class="form-group">
                        <label for="email">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" >
                    </div>
                    <div class="form-group">
                        <label for="email">Others</label>
                        <input type="text" class="form-control" id="others" name="others" placeholder="Enter others" >
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
