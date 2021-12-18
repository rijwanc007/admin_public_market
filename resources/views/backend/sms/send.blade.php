@extends('master')
@section('title', 'Send | SMS')
@section('sms','active') @section('sms_show','show') @section('sms_create','active')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="page-header" id="bannerClose"><h3 class="page-title"><span class="page-title-icon bg-gradient-success text-white mr-2"><i class="mdi mdi-message"></i></span>Send SMS</h3> </div>
                    </div>
                    {!! Form::open(['class' =>'form-sample','route' => 'wp_bulk_sms.send_store','method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <table class="custom">
                                <thead>
                                <tr class="text-center">
                                    <th><input type="checkbox" class="" id="check_all" name="check_all"> All </th>
                                    <th>ID</th>
                                    <th>Client Name</th>
                                    <th>Phone Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($clients as $client)
                                    <tr class="text-center">
                                        <td><input type="checkbox" class="check_click" id="checked_{{$client->id}}" name="client_phone[]" value="{{$client->phone}}"></td>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$client->name}}</td>
                                        <td>{{$client->phone}}</td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="4">{{'No Data Found !!'}}</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            <br/><br/>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message" >Message</label>
                                <textarea class="form-control" id="message" name="message" placeholder="Enter Message Here..." rows="7" required></textarea>
                            </div>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button type="submit" class="custom_button"><i class="mdi mdi-send"></i> Send </button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        $("#check_all").click(function () {
            $(".check_click").prop('checked', $(this).prop('checked'));
        });
    </script>
@endsection
