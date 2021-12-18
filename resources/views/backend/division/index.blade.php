@extends('master')
@section('title', 'Index | Division')
@section('division','active') @section('division_show','show') @section('division_index','active')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-md-12">
                            <h2 class="text-center custom_text_design">All Division<hr style=""/></h2>
                            <div class="row"><div class="col-md-12"><h2 class="text-center text-info">@if(!empty($from) && !empty($to)) <h4 class="text-center text-info">From {{$from}} To {{$to}}</h4> @endif</h2></div></div>
                            <br>
                            <table class="custom">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L </th>
                                    <th> Name </th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($allAds as $Ads)
                                    <tr class="text-center">
                                        <td>{{ ($allAds->currentpage()-1) * $allAds ->perpage() + $loop->index + 1 }}</td>
                                        <td> {{$Ads->name}} </td>
                                        <td>
                                            <div class="modal fade" id="delete_modal_{{$Ads->id}}" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Ads</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are You Want To Delete Division.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            {!! Form::open(['route' => ['division.destroy',$Ads->id],'method' => 'DELETE']) !!}
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
