@extends('master')
@section('title', 'Index | User')
@section('users','active') @section('users_show','show') @section('users_index','active')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row table-responsive">
                        <div class="col-lg-12">
                            <h2 class="text-center custom_text_design">All User<hr /></h2><br/>
                            {!! Form::open(['route' => 'user.search','method' => 'GET']) !!}
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
                            <br>
                            <table class="custom">
                                <thead>
                                <tr class="text-center">
                                    <th> S/L </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($users as $user)
                                        <tr  class="text-center">
                                            <td>{{ ($users->currentpage()-1) * $users ->perpage() + $loop->index + 1 }}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <div class="modal fade" id="myModal_user_{{$user->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">User Detais</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="row table-responsive">
                                                                            <div class="col-lg-12">
                                                                                <table class="table table-striped">
                                                                                    <thead class="thead-dark">
                                                                                    <tr>
                                                                                        <th colspan="2">
                                                                                            <img src="{{asset('/assets/images/user/'. $user->image)}}" class="user_image">
                                                                                        </th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>Name</td>
                                                                                        <td>{{$user->name}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Email</td>
                                                                                        <td>{{$user->email}}</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Phone</td>
                                                                                        <td>{{$user->phone}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Address</td>
                                                                                        <td>{{$user->address}}</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn-floating btn-inverse-success btn-icon" data-toggle="modal" data-target="#myModal_user_{{$user->id}}"><i class="mdi mdi-eye"></i></button>
                                                <button type="button" class="btn-floating btn-inverse-info btn-icon" onclick="window.location='{{route('user.edit',$user->id)}}'"><i class="mdi mdi-pencil"></i></button>
                                                <div class="modal fade" id="delete_modal_{{$user->id}}" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Delete User</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are You Want To Delete These User.Once You Delete These User</p>
                                                                <p>You Will Delete His/Her Information Permanently</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                {!! Form::open(['route' => ['user.destroy',$user->id],'method' => 'DELETE']) !!}
                                                                <button type="submit" class="btn btn-success">submit</button>
                                                                {!! Form::close() !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn-floating btn-inverse-danger btn-icon" data-toggle="modal" data-target="#delete_modal_{{$user->id}}"><i class="mdi mdi-delete-forever"></i></button>
                                            </td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-info">{{'No User Created Yet'}}</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <br/>
                            {!! $users->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
