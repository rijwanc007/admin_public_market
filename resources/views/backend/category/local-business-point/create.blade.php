@extends('master')
@section('title', 'Create | Local Business Point')
@section('ads','active') @section('ads_show','show') @section('local_business_point','active') @section('local_business_point_show','show') @section('local_business_point_create','active')
@section('content')
    {!! Form::open(['class' =>'form-sample','route' => 'local-business-point.store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-paperclip"></i></span>Add Local Business Point</h3></div>
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
                        <label for="phone">Characteristic</label>
                        <input type="text" class="form-control" id="characteristic" name="characteristic" placeholder="Enter characteristic" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Advantages</label>
                        <input type="text" class="form-control" id="advantages" name="advantages" placeholder="Enter advantages">
                    </div>
                    <div class="form-group">
                        <label for="email">Challenges</label>
                        <input type="text" class="form-control" id="challenges" name="challenges" placeholder="Enter challenges">
                    </div>
                    <div class="form-group">
                        <label for="email">Marketing</label>
                        <input type="text" class="form-control" id="marketing" name="marketing" placeholder="Enter marketing">
                    </div>
                    <div class="form-group">
                        <label for="email">Contribution</label>
                        <input type="text" class="form-control" id="contribution" name="contribution" placeholder="Enter contribution">
                    </div>
                    <div class="form-group">
                        <label for="email">Sources</label>
                        <input type="text" class="form-control" id="sources" name="sources" placeholder="Enter sources">
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
