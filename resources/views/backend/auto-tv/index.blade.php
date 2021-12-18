@extends('master')
@section('title', 'Index | Auto Tv')
@section('auto_tv','active') @section('auto_tv_show','show') @section('auto_tv_index','active')
@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['class' =>'form-sample','route' => ['auto-tv.find'],'method' => 'GET']) !!}
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
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-md-12">
                            <h2 class="text-center custom_text_design">All Auto Tv<hr style=""/></h2>
                            <div class="row"><div class="col-md-12"><h2 class="text-center text-info">@if(!empty($from) && !empty($to)) <h4 class="text-center text-info">From {{$from}} To {{$to}}</h4> @endif</h2></div></div>
                            <br>
                            <table class="custom">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L </th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($allAds as $Ads)
                                    <tr class="text-center">
                                        <td>{{ ($allAds->currentpage()-1) * $allAds ->perpage() + $loop->index + 1 }}</td>
                                        <td>
                                            <a class="btn-floating btn-inverse-success btn-icon custom_eye" target="_blank"  href="{{ asset('/assets/BackEnd/images/tvc/'.$Ads->video ) }}"><i class="mdi mdi-eye"></i></a>
                                            @if($Ads->approve == 0)
                                                <button type="button" class="btn-floating btn-inverse-info btn-icon btn_margin" onclick="window.location='{{route('auto-tv.approve',$Ads->id)}}'"><i class="mdi mdi-check"></i></button>
                                            @else
                                                <button class="btn-floating btn-inverse-info btn-icon btn_margin">Approved</button>
                                            @endif
                                            <div class="modal fade" id="delete_modal_{{$Ads->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Auto Tv</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete Auto Tv.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['auto-tv.destroy',$Ads->id],'method' => 'DELETE']) !!}
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
                                        <td colspan="2" class="text-center text-info">{{'No Auto Tv Created Yet'}}</td>
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
