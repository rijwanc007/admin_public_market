@extends('master')
@section('title','Public Market | DashBoard')
@section('content')
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin card_design_custom_dashboard">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Views <i class="mdi mdi-account mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">20M</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin card_design_custom_dashboard">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Ads <i class="mdi mdi-account mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$total_ads}}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin card_design_custom_dashboard">
            <div class="card bg-gradient-dark card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total TVC<i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$total_tvc}}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin card_design_custom_dashboard">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Subscriber<i class="mdi mdi-chart-bar mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$total_subscriber}}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin card_design_custom_dashboard">
            <div class="card bg-gradient-dark card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total CV <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$total_cv}}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin card_design_custom_dashboard">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Today's Ads<i class="mdi mdi-account mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$today_ads}}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body table-responsive">
                    <h4 class="card-title">Current User's</h4>
                    <table class="table custom">
                        <thead>
                        <tr class="text-center">
                            <th> # </th>
                            <th> Image </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr class="text-center">
                                <td>{{ ($users->currentpage()-1) * $users ->perpage() + $loop->index + 1 }}</td>
                                <td><img src="{{asset('/assets/images/user/'.$user->image)}}" alt=""></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5"><div class="text-danger"> No User Found</div></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 id="monthAndYear"></h3>
                    <div class="button-container-calendar">
                        <button id="previous" onclick="previous()">&#8249;</button>
                        <button id="next" onclick="next()">&#8250;</button>
                    </div>
                    <table class="table-calendar" id="calendar" data-lang="en">
                        <thead id="thead-month"></thead>
                        <tbody id="calendar-body"></tbody>
                    </table>
                    <div class="footer-container-calendar">
                        <label for="month">Jump To: </label>
                        <select id="month" onchange="jump()">
                            <option value=0>Jan</option>
                            <option value=1>Feb</option>
                            <option value=2>Mar</option>
                            <option value=3>Apr</option>
                            <option value=4>May</option>
                            <option value=5>Jun</option>
                            <option value=6>Jul</option>
                            <option value=7>Aug</option>
                            <option value=8>Sep</option>
                            <option value=9>Oct</option>
                            <option value=10>Nov</option>
                            <option value=11>Dec</option>
                        </select>
                        <select id="year" onchange="jump()"></select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/calender.js')}}"></script>
@endsection
