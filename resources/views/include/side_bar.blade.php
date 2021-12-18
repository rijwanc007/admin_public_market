<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset('assets/images/user/' . Auth::user()->image)}}" alt="profile">
                    <span class="login-status online"></span>
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>
                    <span class="text-secondary text-small">{{'Admin'}}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </div>
        </li>
        <li class="collapsed active" style="margin-left: 34px;cursor: pointer;display: none">
            <a onclick="holdCollapse();" data-toggle="collapse" data-target="#accounting" class="dropdown-toggle  collapsed">Accounting </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item  @yield('users')">
            <a class="nav-link" data-toggle="collapse" href="#user-basic" @if(View::hasSection('users')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="ui-basic">
                <span class="menu-title">User's</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account menu-icon"></i>
            </a>
            <div class="collapse @yield('users_show')" id="user-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @yield('users_create')" href="{{route('user.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('users_index')" href="{{route('user.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item  @yield('ads')">
            <a class="nav-link" data-toggle="collapse" href="#ads-basic" @if(View::hasSection('ads')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="account-basic">
                <span class="menu-title">Ads</span><i class="menu-arrow"></i><i class="mdi mdi-gamepad menu-icon"></i>
            </a>
            <div class="collapse @yield('ads_show')" id="ads-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item @yield('mobile')">
                        <a class="nav-link" data-toggle="collapse" href="#mobile-basic" @if(View::hasSection('mobile')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Mobile</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('mobile_show')" id="mobile-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('mobile_create')" href="{{route('mobile.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('mobile_index')" href="{{route('mobile.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('electronic')">
                        <a class="nav-link" data-toggle="collapse" href="#electronic-basic" @if(View::hasSection('electronic')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Electronic</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('electronic_show')" id="electronic-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('electronic_create')" href="{{route('electronic.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('electronic_index')" href="{{route('electronic.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('home_living')">
                        <a class="nav-link" data-toggle="collapse" href="#home-living-basic" @if(View::hasSection('home_living')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Home & Living</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('home_living_show')" id="home-living-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('home_living_create')" href="{{route('home-living.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('home_living_index')" href="{{route('home-living.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('daily_essential_product')">
                        <a class="nav-link" data-toggle="collapse" href="#daily_essential_product" @if(View::hasSection('daily_essential_product')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span data-toggle="tooltip" data-placement="top" title="Daily Essential Product" class="menu-title">Daily Essential</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('daily_essential_product_show')" id="daily_essential_product">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('daily_essential_product_create')" href="{{route('daily-essential-product.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('daily_essential_product_index')" href="{{route('daily-essential-product.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('health_beauty')">
                        <a class="nav-link" data-toggle="collapse" href="#health_beauty" @if(View::hasSection('health_beauty')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Health & Beauty</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('health_beauty_show')" id="health_beauty">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('health_beauty_create')" href="{{route('health-beauty.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('health_beauty_index')" href="{{route('health-beauty.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('garments_clothing')">
                        <a class="nav-link" data-toggle="collapse" href="#garments_clothing" @if(View::hasSection('garments_clothing')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title" data-toggle="tooltip" data-placement="top" title="Garments & Clothing">Garments & Cloth..</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('garments_clothing_show')" id="garments_clothing">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('garments_clothing_create')" href="{{route('garments-clothing.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('garments_clothing_index')" href="{{route('garments-clothing.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('hobby_sports_baby')">
                        <a class="nav-link" data-toggle="collapse" href="#hobby_sports_baby" @if(View::hasSection('hobby_sports_baby')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Hobby Sports Baby</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('hobby_sports_baby_show')" id="hobby_sports_baby">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('hobby_sports_baby_create')" href="{{route('hobby-sports-baby.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('hobby_sports_baby_index')" href="{{route('hobby-sports-baby.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('agriculture_Agro_Product')">
                        <a class="nav-link" data-toggle="collapse" href="#agriculture_Agro_Product" @if(View::hasSection('agriculture_Agro_Product')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title text" data-toggle="tooltip" data-placement="top" title="Agriculture & Agro Product">Agriculture & Agro</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('agriculture_Agro_Product_show')" id="agriculture_Agro_Product">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('agriculture_Agro_Product_create')" href="{{route('agriculture-agro-product.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('agriculture_Agro_Product_index')" href="{{route('agriculture-agro-product.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('business_industry')">
                        <a class="nav-link" data-toggle="collapse" href="#business_industry" @if(View::hasSection('business_industry')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Business & Industry</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('business_industry_show')" id="business_industry">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('business_industry_create')" href="{{route('business-industry.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('business_industry_index')" href="{{route('business-industry.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('education')">
                        <a class="nav-link" data-toggle="collapse" href="#education" @if(View::hasSection('education')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Education</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('education_show')" id="education">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('education_create')" href="{{route('education.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('education_index')" href="{{route('education.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('fuel_oil_gas')">
                        <a class="nav-link" data-toggle="collapse" href="#fuel_oil_gas" @if(View::hasSection('fuel_oil_gas')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Fuel Oil Gas</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('fuel_oil_gas_show')" id="fuel_oil_gas">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('fuel_oil_gas_create')" href="{{route('fuel-oil-gas.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('fuel_oil_gas_index')" href="{{route('fuel-oil-gas.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('pet_animal')">
                        <a class="nav-link" data-toggle="collapse" href="#pet_animal" @if(View::hasSection('pet_animal')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Pet Animal</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('pet_animal_show')" id="pet_animal">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('pet_animal_create')" href="{{route('pet-animal.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('pet_animal_index')" href="{{route('pet-animal.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('pm_food_bank_restaurant')">
                        <a class="nav-link" data-toggle="collapse" href="#pm_food_bank_restaurant" @if(View::hasSection('pm_food_bank_restaurant')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title" data-toggle="tooltip" data-placement="top" title="PM Food Bank & Restaurant">PM Food Bank</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('pm_food_bank_restaurant_show')" id="pm_food_bank_restaurant">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('pm_food_bank_restaurant_create')" href="{{route('pm-food-bank-restaurant.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('pm_food_bank_restaurant_index')" href="{{route('pm-food-bank-restaurant.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('company_product_branding')">
                        <a class="nav-link" data-toggle="collapse" href="#company_product_branding" @if(View::hasSection('company_product_branding')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title" data-toggle="tooltip" data-placement="top" title="Company Product Branding">Company Product</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('company_product_branding_show')" id="company_product_branding">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('company_product_branding_create')" href="{{route('company-product-branding.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('company_product_branding_index')" href="{{route('company-product-branding.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('service')">
                        <a class="nav-link" data-toggle="collapse" href="#service" @if(View::hasSection('service')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Service</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('service_show')" id="service">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('service_create')" href="{{route('service.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('service_index')" href="{{route('service.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('tour_travel')">
                        <a class="nav-link" data-toggle="collapse" href="#tour-travel" @if(View::hasSection('tour_travel')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Tour & Travel</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('tour_travel_show')" id="tour-travel">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('tour_travel_create')" href="{{route('tour-travel.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('tour_travel_index')" href="{{route('tour-travel.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('local_business_point')">
                        <a class="nav-link" data-toggle="collapse" href="#local_business_point" @if(View::hasSection('local_business_point')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title" data-toggle="tooltip" data-placement="top" title="Local Business Point">Local Business ..</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('local_business_point_show')" id="local_business_point">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('local_business_point_create')" href="{{route('local-business-point.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('local_business_point_index')" href="{{route('local-business-point.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('resort_hotel_community_center')">
                        <a class="nav-link" data-toggle="collapse" href="#resort_hotel_community_center" @if(View::hasSection('resort_hotel_community_center')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title" data-toggle="tooltip" data-placement="top" title="Resort Hotel & Community Center">Resort Hotel</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('resort_hotel_community_center_show')" id="resort_hotel_community_center">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('resort_hotel_community_center_create')" href="{{route('resort-hotel-community-center.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('resort_hotel_community_center_index')" href="{{route('resort-hotel-community-center.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('rent_to_let')">
                        <a class="nav-link" data-toggle="collapse" href="#rent_to_let" @if(View::hasSection('rent_to_let')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Rent To Let</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('rent_to_let_show')" id="rent_to_let">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('rent_to_let_create')" href="{{route('rent-to-let.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('rent_to_let_index')" href="{{route('rent-to-let.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('others')">
                        <a class="nav-link" data-toggle="collapse" href="#others" @if(View::hasSection('others')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Others</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('others_show')" id="others">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('others_create')" href="{{route('others.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('others_index')" href="{{route('others.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('vehicles_transportation')">
                        <a class="nav-link" data-toggle="collapse" href="#vehicles_transportation" @if(View::hasSection('vehicles_transportation')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title" data-toggle="tooltip" data-placement="top" title="Vehicles & Transportation">Vehicles & Trans..</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('vehicles_transportation_show')" id="vehicles_transportation">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('vehicles_transportation_create')" href="{{route('vehicles-transportation.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('vehicles_transportation_index')" href="{{route('vehicles-transportation.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('real_state_property')">
                        <a class="nav-link" data-toggle="collapse" href="#real_state_property" @if(View::hasSection('real_state_property')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Real State Property</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('real_state_property_show')" id="real_state_property">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('real_state_property_create')" href="{{route('real-state-property.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('real_state_property_index')" href="{{route('real-state-property.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('personal_advertisement')">
                        <a class="nav-link" data-toggle="collapse" href="#personal_advertisement" @if(View::hasSection('personal_advertisement')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title" data-toggle="tooltip" data-placement="top" title="Personal Advertisement">Personal Adverti..</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('personal_advertisement_show')" id="personal_advertisement">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('personal_advertisement_create')" href="{{route('personal-advertisement.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('personal_advertisement_index')" href="{{route('personal-advertisement.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </li>

        <li class="nav-item  @yield('division')">
            <a class="nav-link" data-toggle="collapse" href="#division-basic" @if(View::hasSection('division')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="ui-basic">
                <span class="menu-title">Division</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-google-maps menu-icon"></i>
            </a>
            <div class="collapse @yield('division_show')" id="division-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @yield('division_create')" href="{{route('division.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('division_index')" href="{{route('division.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item  @yield('district')">
            <a class="nav-link" data-toggle="collapse" href="#district-basic" @if(View::hasSection('district')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="ui-basic">
                <span class="menu-title">District</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-google-maps menu-icon"></i>
            </a>
            <div class="collapse @yield('district_show')" id="district-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @yield('district_create')" href="{{route('district.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('district_index')" href="{{route('district.index')}}">Index</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item  @yield('job_bank')">
            <a class="nav-link" data-toggle="collapse" href="#job_bank" @if(View::hasSection('job_bank')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="account-basic">
                <span class="menu-title">Job Bank</span><i class="menu-arrow"></i><i class="mdi mdi-briefcase menu-icon"></i>
            </a>
            <div class="collapse @yield('job_bank_show')" id="job_bank">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item @yield('cv_upload')">
                        <a class="nav-link" data-toggle="collapse" href="#cv_upload" @if(View::hasSection('cv_upload')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">CV Upload</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('cv_upload_show')" id="cv_upload">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('cv_upload_create')" href="{{route('cv-upload.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('cv_upload_index')" href="{{route('cv-upload.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('vacancy_announcement')">
                        <a class="nav-link" data-toggle="collapse" href="#vacancy_announcement" @if(View::hasSection('vacancy_announcement')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title" data-toggle="tooltip" data-placement="top" title="Vacancy Announcement">Vacancy Annou..</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('vacancy_announcement_show')" id="vacancy_announcement">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('vacancy_announcement_create')" href="{{route('vacancy-announcement.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('vacancy_announcement_index')" href="{{route('vacancy-announcement.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item  @yield('tvc')">
            <a class="nav-link" data-toggle="collapse" href="#tvc-basic" @if(View::hasSection('tvc')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="ui-basic">
                <span class="menu-title">TVC</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-video menu-icon"></i>
            </a>
            <div class="collapse @yield('tvc_show')" id="tvc-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @yield('tvc_create')" href="{{route('tvc.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('tvc_index')" href="{{route('tvc.index')}}">Index</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item  @yield('auto_tv')">
            <a class="nav-link" data-toggle="collapse" href="#auto-tv-basic" @if(View::hasSection('auto_tv')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="ui-basic">
                <span class="menu-title">Auto Tv</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-video menu-icon"></i>
            </a>
            <div class="collapse @yield('auto_tv_show')" id="auto-tv-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @yield('auto_tv_create')" href="{{route('auto-tv.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('auto_tv_index')" href="{{route('auto-tv.index')}}">Index</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item  @yield('subscribe')">
            <a class="nav-link" data-toggle="collapse" href="#subscribe-basic" @if(View::hasSection('subscribe')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="ui-basic">
                <span class="menu-title">Subscribe</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-check menu-icon"></i>
            </a>
            <div class="collapse @yield('subscribe_show')" id="subscribe-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @yield('subscribe_create')" href="{{route('subscribe.create')}}">Create</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('subscribe_index')" href="{{route('subscribe.index')}}">Index</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item  @yield('sms')">
            <a class="nav-link" data-toggle="collapse" href="#sms-basic" @if(View::hasSection('sms')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="ui-basic">
                <span class="menu-title">SMS</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-message menu-icon"></i>
            </a>
            <div class="collapse @yield('sms_show')" id="sms-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @yield('sms_create')" href="{{route('wp_sms.send')}}">SMS</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item  @yield('ads_banner')">
            <a class="nav-link" data-toggle="collapse" href="#ads-banner" @if(View::hasSection('ads_banner')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="account-basic">
                <span class="menu-title">Ads Banner</span><i class="menu-arrow"></i><i class="mdi mdi-image-filter menu-icon"></i>
            </a>
            <div class="collapse @yield('ads_banner_show')" id="ads-banner">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item @yield('footer_banner')">
                        <a class="nav-link" data-toggle="collapse" href="#footer_banner" @if(View::hasSection('footer_banner')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Footer Banner</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('footer_banner_show')" id="footer_banner">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('footer_banner_create')" href="{{route('footer-banner.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('footer_banner_index')" href="{{route('footer-banner.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('left_feature_banner')">
                        <a class="nav-link" data-toggle="collapse" href="#left_feature_banner" @if(View::hasSection('left_feature_banner')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Left Feature Ads</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('left_feature_banner_show')" id="left_feature_banner">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('left_feature_banner_create')" href="{{route('left-feature-banner.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('left_feature_banner_index')" href="{{route('left-feature-banner.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('right_banner')">
                        <a class="nav-link" data-toggle="collapse" href="#right_banner" @if(View::hasSection('right_banner')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Right Banner</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('right_banner_show')" id="right_banner">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('right_banner_create')" href="{{route('right-banner.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('right_banner_index')" href="{{route('right-banner.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @yield('top_banner')">
                        <a class="nav-link" data-toggle="collapse" href="#top_banner" @if(View::hasSection('top_banner')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="chart_of_account-basic">
                            <span class="menu-title">Top Banner</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse @yield('top_banner_show')" id="top_banner">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link  @yield('top_banner_create')" href="{{route('top-banner.create')}}">Create</a></li>
                                <li class="nav-item"> <a class="nav-link @yield('top_banner_index')" href="{{route('top-banner.index')}}">Index</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item  @yield('ads_pricing')">
            <a class="nav-link" data-toggle="collapse" href="#ads_pricing" @if(View::hasSection('ads_pricing')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="ui-basic">
                <span class="menu-title">Ads Pricing</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-star mdi-spin menu-icon"></i>
            </a>
            <div class="collapse @yield('ads_pricing_show')" id="ads_pricing">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @yield('ads_pricing_index')" href="{{route('ads-pricing.index')}}">Index</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('ads_pricing_create')" href="{{route('ads-pricing.create')}}">Create</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item  @yield('front')">
            <a class="nav-link" data-toggle="collapse" href="#front-basic" @if(View::hasSection('front')) aria-expanded="true" @else aria-expanded="false" @endif aria-controls="ui-basic">
                <span class="menu-title">Front Show</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-eye menu-icon"></i>
            </a>
            <div class="collapse @yield('front_show')" id="front-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link @yield('all_tvc_ads')" href="{{route('front.tvc.index')}}">Tvc</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_vacancy_announce')" href="{{route('front-vacancy-announcement.index')}}">Vacancy Announce</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_division')" href="{{route('front-division.index')}}">Division</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_district')" href="{{route('front-district.index')}}">District</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_ads')" href="{{route('all-ads.index')}}">All Ads</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_ads_search')" href="{{route('search.frontend.index')}}">Search</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_tv')" href="{{route('front-auto-tv.index')}}">Auto Tv</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_left_feature_ads')" href="{{route('front-left-feature-banner')}}">Left Feature Ads</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_right_banner_ads')" href="{{route('front-right-banner')}}">Right Banner Ads</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_footer_banner_ads')" href="{{route('front-footer-banner')}}">Footer Banner Ads</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_top_banner_ads')" href="{{route('front-top-banner')}}">Top Banner Ads</a></li>
                    <li class="nav-item"> <a class="nav-link @yield('all_ads_pricing')" href="{{route('front-ads-pricing')}}">All Ads Pricing</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
