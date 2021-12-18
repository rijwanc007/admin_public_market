@extends('master')
@section('title', 'Create | Rent To Let')
@section('ads','active') @section('ads_show','show') @section('rent_to_let','active') @section('rent_to_let_show','show') @section('rent_to_let_create','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'rent-to-let.store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-paperclip"></i></span> Add New Fuel Oil Gas</h3></div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="phone">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Beds</label>
                        <input type="text" class="form-control" id="beds" name="beds" placeholder="Enter beds">
                    </div>
                    <div class="form-group">
                        <label for="phone">Baths</label>
                        <input type="text" class="form-control" id="baths" name="baths" placeholder="Enter baths">
                    </div>
                    <div class="form-group">
                        <label for="email">Land Size</label>
                        <input type="text" class="form-control" id="land_size" name="land_size" placeholder="Enter land size">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Land Size Unit</label>
                        <select class="form-control" id="condition" name="land_size_unit">
                            <option>Please select unit</option>
                            <option value="katha">Katha</option>
                            <option value="bigha">Bigha</option>
                            <option value="acres">Acres</option>
                            <option value="shotok">Shotok</option>
                            <option value="decimal">Decimal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter adress">
                    </div>
                    <div class="form-group">
                        <label for="email">House Size</label>
                        <input type="text" class="form-control" id="house_size" name="house_size" placeholder="Enter house size">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">House Size Unit</label>
                        <select class="form-control" id="condition" name="house_size_unit">
                            <option>Please select unit</option>
                            <option value="katha">Katha</option>
                            <option value="bigha">Bigha</option>
                            <option value="acres">Acres</option>
                            <option value="shotok">Shotok</option>
                            <option value="decimal">Decimal</option>
                        </select>
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
