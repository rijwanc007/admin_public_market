@extends('master')
@section('title', 'Index | Personal Advertisement')
@section('ads','active') @section('ads_show','show') @section('personal_advertisement','active') @section('personal_advertisement_show','show') @section('personal_advertisement_index','active')
@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['class' =>'form-sample','route' => ['personal-advertisement.find'],'method' => 'GET']) !!}
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="select_role" >Date From</label>
                        <input type="date" class="form-control" id="date_from" name="date_from" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="select_role" >Date To</label>
                        <input type="date" class="form-control" id="date_to" name="date_to" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="select_role" ></label>
                        <input type="submit" class="custom_button" value="Search">
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
            {!! Form::open(['route' => 'personal-advertisement.search','method' => 'GET']) !!}
            <div class="row text-center">
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" class="form-control" id="input" name="input" placeholder="Search in table.....">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <button class="custom_button" id="search_balance">Search</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-md-12">
                            <h2 class="text-center custom_text_design">All Personal Advertisement Ads<hr style=""/></h2>
                            <div class="row"><div class="col-md-12"><h2 class="text-center text-info">@if(!empty($from) && !empty($to)) <h4 class="text-center text-info">From {{$from}} To {{$to}}</h4> @endif</h2></div></div>
                            <br>
                            <table class="custom">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L </th>
                                    <th> Title </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Price </th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($allAds as $Ads)
                                    <tr class="text-center">
                                        <td>{{ ($allAds->currentpage()-1) * $allAds ->perpage() + $loop->index + 1 }}</td>
                                        <td> {{Str::limit($Ads->title, 15)}}</td>
                                        <td> {{$Ads->name}} </td>
                                        <td> {{$Ads->email}} </td>
                                        <td> {{$Ads->price}} </td>
                                        <td>
                                            <button type="button" class="btn-floating btn-inverse-success btn-icon" onclick="window.location='{{route('personal-advertisement.show',$Ads->id)}}'"><i class="mdi mdi-eye"></i></button>
                                            @if($Ads->approve == 0)
                                                <button type="button" class="btn-floating btn-inverse-info btn-icon btn_approve" onclick="window.location='{{route('personal-advertisement.approve',$Ads->id)}}'"><i class="mdi mdi-check"></i></button>
                                            @else
                                                <button class="btn-floating btn-inverse-info btn-icon btn_approve">Approved</button>
                                            @endif
                                            <div class="modal fade" id="delete_modal_{{$Ads->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Ads</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete Ads.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['personal-advertisement.destroy',$Ads->id],'method' => 'DELETE']) !!}
                                                            <button type="submit" class="btn btn-success">Delete</button>
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn-floating btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$Ads->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-info">{{'No Ads Created Yet'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            {!! $allAds->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
