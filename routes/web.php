<?php

Route::get('/', function () {return view('welcome');})->name('welcome');


Auth::routes();
Route::group(['middleware' => ['preventbackbutton','auth']],function() {
Route::get('/home', 'Admin\IndexController@index')->name('home');

    Route::resource('/user', 'Admin\UserController');
    Route::get('user-index', 'Admin\UserController@index')->name('user.index');
    Route::get('user-create', 'Admin\UserController@create')->name('user.create');
    Route::get('user-search', 'Admin\UserController@search')->name('user.search');

    Route::resource('/mobile', 'Admin\MobileController');
    Route::get('mobile-index', 'Admin\MobileController@index')->name('mobile.index');
    Route::get('mobile-create', 'Admin\MobileController@create')->name('mobile.create');
    Route::get('mobile-search', 'Admin\MobileController@search')->name('mobile.search');
    Route::get('mobile-find', 'Admin\MobileController@mobileFind')->name('ads.find');
    Route::get('mobile-approve-{id}', 'Admin\MobileController@approve')->name('ads.approve');

    Route::resource('/electronic', 'Admin\ElectronicsController');
    Route::get('electronic-index', 'Admin\ElectronicsController@index')->name('electronic.index');
    Route::get('electronic-create', 'Admin\ElectronicsController@create')->name('electronic.create');
    Route::get('electronic-search', 'Admin\ElectronicsController@search')->name('electronic.search');
    Route::get('electronic-find', 'Admin\ElectronicsController@electronicFind')->name('electronic.find');
    Route::get('electronic-approve-{id}', 'Admin\ElectronicsController@approve')->name('electronic.approve');

    Route::resource('/home-living', 'Admin\homeLivingController');
    Route::get('home-living-index', 'Admin\homeLivingController@index')->name('home-living.index');
    Route::get('home-living-create', 'Admin\homeLivingController@create')->name('home-living.create');
    Route::get('home-living-search', 'Admin\homeLivingController@search')->name('home-living.search');
    Route::get('home-living-find', 'Admin\homeLivingController@homeLivingFind')->name('home-living.find');
    Route::get('home-living-approve-{id}', 'Admin\homeLivingController@approve')->name('home-living.approve');

    Route::resource('/daily-essential-product', 'Admin\dailyEssentialProductController');
    Route::get('daily-essential-product-index', 'Admin\dailyEssentialProductController@index')->name('daily-essential-product.index');
    Route::get('daily-essential-product-create', 'Admin\dailyEssentialProductController@create')->name('daily-essential-product.create');
    Route::get('daily-essential-product-search', 'Admin\dailyEssentialProductController@search')->name('daily-essential-product.search');
    Route::get('daily-essential-product-find', 'Admin\dailyEssentialProductController@dailyEssentialProductFind')->name('daily-essential-product.find');
    Route::get('daily-essential-product-approve-{id}', 'Admin\dailyEssentialProductController@approve')->name('daily-essential-product.approve');

    Route::resource('/health-beauty', 'Admin\healthBeautyController');
    Route::get('health-beauty-index', 'Admin\healthBeautyController@index')->name('health-beauty.index');
    Route::get('health-beauty-create', 'Admin\healthBeautyController@create')->name('health-beauty.create');
    Route::get('health-beauty-search', 'Admin\healthBeautyController@search')->name('health-beauty.search');
    Route::get('health-beauty-find', 'Admin\healthBeautyController@healthBeautyFind')->name('health-beauty.find');
    Route::get('health-beauty-approve-{id}', 'Admin\healthBeautyController@approve')->name('health-beauty.approve');

    Route::resource('/garments-clothing', 'Admin\garmentsClothingController');
    Route::get('garments-clothing-index', 'Admin\garmentsClothingController@index')->name('garments-clothing.index');
    Route::get('garments-clothing-create', 'Admin\garmentsClothingController@create')->name('garments-clothing.create');
    Route::get('garments-clothing-search', 'Admin\garmentsClothingController@search')->name('garments-clothing.search');
    Route::get('garments-clothing-find', 'Admin\garmentsClothingController@garmentsClothingFind')->name('garments-clothing.find');
    Route::get('garments-clothing-approve-{id}', 'Admin\garmentsClothingController@approve')->name('garments-clothing.approve');

    Route::resource('/hobby-sports-baby', 'Admin\hobbySportsBabyController');
    Route::get('hobby-sports-baby-index', 'Admin\hobbySportsBabyController@index')->name('hobby-sports-baby.index');
    Route::get('hobby-sports-baby-create', 'Admin\hobbySportsBabyController@create')->name('hobby-sports-baby.create');
    Route::get('hobby-sports-baby-search', 'Admin\hobbySportsBabyController@search')->name('hobby-sports-baby.search');
    Route::get('hobby-sports-baby-find', 'Admin\hobbySportsBabyController@hobbySportsBabyFind')->name('hobby-sports-baby.find');
    Route::get('hobby-sports-baby-approve-{id}', 'Admin\hobbySportsBabyController@approve')->name('hobby-sports-baby.approve');

    Route::resource('/agriculture-agro-product', 'Admin\AgricultureAgroProductController');
    Route::get('agriculture-agro-product-index', 'Admin\AgricultureAgroProductController@index')->name('agriculture-agro-product.index');
    Route::get('agriculture-agro-product-create', 'Admin\AgricultureAgroProductController@create')->name('agriculture-agro-product.create');
    Route::get('agriculture-agro-product-search', 'Admin\AgricultureAgroProductController@search')->name('agriculture-agro-product.search');
    Route::get('agriculture-agro-product-find', 'Admin\AgricultureAgroProductController@agricultureAgroProductFind')->name('agriculture-agro-product.find');
    Route::get('agriculture-agro-product-approve-{id}', 'Admin\AgricultureAgroProductController@approve')->name('agriculture-agro-product.approve');

    Route::resource('/business-industry', 'Admin\BusinessIndustryController');
    Route::get('business-industry-index', 'Admin\BusinessIndustryController@index')->name('business-industry.index');
    Route::get('business-industry-create', 'Admin\BusinessIndustryController@create')->name('business-industry.create');
    Route::get('business-industry-search', 'Admin\BusinessIndustryController@search')->name('business-industry.search');
    Route::get('business-industry-find', 'Admin\BusinessIndustryController@businessIndustryFind')->name('business-industry.find');
    Route::get('business-industry-approve-{id}', 'Admin\BusinessIndustryController@approve')->name('business-industry.approve');

    Route::resource('/education', 'Admin\EducationController');
    Route::get('education-index', 'Admin\EducationController@index')->name('education.index');
    Route::get('education-create', 'Admin\EducationController@create')->name('education.create');
    Route::get('education-search', 'Admin\EducationController@search')->name('education.search');
    Route::get('education-find', 'Admin\EducationController@educationFind')->name('education.find');
    Route::get('education-approve-{id}', 'Admin\EducationController@approve')->name('education.approve');

    Route::resource('/fuel-oil-gas', 'Admin\FuelOilGasController');
    Route::get('fuel-oil-gas-index', 'Admin\FuelOilGasController@index')->name('fuel-oil-gas.index');
    Route::get('fuel-oil-gas-create', 'Admin\FuelOilGasController@create')->name('fuel-oil-gas.create');
    Route::get('fuel-oil-gas-search', 'Admin\FuelOilGasController@search')->name('fuel-oil-gas.search');
    Route::get('fuel-oil-gas-find', 'Admin\FuelOilGasController@fuilOilGasFind')->name('fuel-oil-gas.find');
    Route::get('fuel-oil-gas-approve-{id}', 'Admin\FuelOilGasController@approve')->name('fuel-oil-gas.approve');

    Route::resource('/pet-animal', 'Admin\PetAnimalController');
    Route::get('pet-animal-index', 'Admin\PetAnimalController@index')->name('pet-animal.index');
    Route::get('pet-animal-create', 'Admin\PetAnimalController@create')->name('pet-animal.create');
    Route::get('pet-animal-search', 'Admin\PetAnimalController@search')->name('pet-animal.search');
    Route::get('pet-animal-find', 'Admin\PetAnimalController@petAnimalFind')->name('pet-animal.find');
    Route::get('pet-animal-approve-{id}', 'Admin\PetAnimalController@approve')->name('pet-animal.approve');

    Route::resource('/pm-food-bank-restaurant', 'Admin\PMFoodBankRestaurantController');
    Route::get('pm-food-bank-restaurant-index', 'Admin\PMFoodBankRestaurantController@index')->name('pm-food-bank-restaurant.index');
    Route::get('pm-food-bank-restaurant-create', 'Admin\PMFoodBankRestaurantController@create')->name('pm-food-bank-restaurant.create');
    Route::get('pm-food-bank-restaurant-search', 'Admin\PMFoodBankRestaurantController@search')->name('pm-food-bank-restaurant.search');
    Route::get('pm-food-bank-restaurant-find', 'Admin\PMFoodBankRestaurantController@pmFoodBankFind')->name('pm-food-bank-restaurant.find');
    Route::get('pm-food-bank-restaurant-approve-{id}', 'Admin\PMFoodBankRestaurantController@approve')->name('pm-food-bank-restaurant.approve');

    Route::resource('/company-product-branding', 'Admin\CompanyProductBrandingController');
    Route::get('company-product-branding-index', 'Admin\CompanyProductBrandingController@index')->name('company-product-branding.index');
    Route::get('company-product-branding-create', 'Admin\CompanyProductBrandingController@create')->name('company-product-branding.create');
    Route::get('company-product-branding-search', 'Admin\CompanyProductBrandingController@search')->name('company-product-branding.search');
    Route::get('company-product-branding-find', 'Admin\CompanyProductBrandingController@companyProductBrandingFind')->name('company-product-branding.find');
    Route::get('company-product-branding-approve-{id}', 'Admin\CompanyProductBrandingController@approve')->name('company-product-branding.approve');

    Route::resource('/service', 'Admin\ServiceController');
    Route::get('service-index', 'Admin\ServiceController@index')->name('service.index');
    Route::get('service-create', 'Admin\ServiceController@create')->name('service.create');
    Route::get('service-search', 'Admin\ServiceController@search')->name('service.search');
    Route::get('service-find', 'Admin\ServiceController@serviceFind')->name('service.find');
    Route::get('service-approve-{id}', 'Admin\ServiceController@approve')->name('service.approve');

    Route::resource('/tour-travel', 'Admin\TourTravelController');
    Route::get('tour-travel-index', 'Admin\TourTravelController@index')->name('tour-travel.index');
    Route::get('tour-travel-create', 'Admin\TourTravelController@create')->name('tour-travel.create');
    Route::get('tour-travel-search', 'Admin\TourTravelController@search')->name('tour-travel.search');
    Route::get('tour-travel-find', 'Admin\TourTravelController@tourTravelFind')->name('tour-travel.find');
    Route::get('tour-travel-approve-{id}', 'Admin\TourTravelController@approve')->name('tour-travel.approve');

    Route::resource('/local-business-point', 'Admin\localBusinessPointController');
    Route::get('local-business-point-index', 'Admin\localBusinessPointController@index')->name('local-business-point.index');
    Route::get('local-business-point-create', 'Admin\localBusinessPointController@create')->name('local-business-point.create');
    Route::get('local-business-point-search', 'Admin\localBusinessPointController@search')->name('local-business-point.search');
    Route::get('local-business-point-find', 'Admin\localBusinessPointController@localBusinessPointFind')->name('local-business-point.find');
    Route::get('local-business-point-approve-{id}', 'Admin\localBusinessPointController@approve')->name('local-business-point.approve');

    Route::resource('/resort-hotel-community-center', 'Admin\ResortHotelCommunityCenterController');
    Route::get('resort-hotel-community-center-index', 'Admin\ResortHotelCommunityCenterController@index')->name('resort-hotel-community-center.index');
    Route::get('resort-hotel-community-center-create', 'Admin\ResortHotelCommunityCenterController@create')->name('resort-hotel-community-center.create');
    Route::get('resort-hotel-community-center-search', 'Admin\ResortHotelCommunityCenterController@search')->name('resort-hotel-community-center.search');
    Route::get('resort-hotel-community-center-find', 'Admin\ResortHotelCommunityCenterController@resortHotelFind')->name('resort-hotel-community-center.find');
    Route::get('resort-hotel-community-center-approve-{id}', 'Admin\ResortHotelCommunityCenterController@approve')->name('resort-hotel-community-center.approve');


    Route::resource('/rent-to-let', 'Admin\RentToLetController');
    Route::get('rent-to-let-index', 'Admin\RentToLetController@index')->name('rent-to-let.index');
    Route::get('rent-to-let-create', 'Admin\RentToLetController@create')->name('rent-to-let.create');
    Route::get('rent-to-let-search', 'Admin\RentToLetController@search')->name('rent-to-let.search');
    Route::get('rent-to-let-find', 'Admin\RentToLetController@rentToLetFind')->name('rent-to-let.find');
    Route::get('rent-to-let-approve-{id}', 'Admin\RentToLetController@approve')->name('rent-to-let.approve');

    Route::resource('/others', 'Admin\OthersController');
    Route::get('others-index', 'Admin\OthersController@index')->name('others.index');
    Route::get('others-create', 'Admin\OthersController@create')->name('others.create');
    Route::get('others-search', 'Admin\OthersController@search')->name('others.search');
    Route::get('others-find', 'Admin\OthersController@othersFind')->name('others.find');
    Route::get('others-approve-{id}', 'Admin\OthersController@approve')->name('others.approve');

    Route::resource('/vehicles-transportation', 'Admin\VehiclesTransportationController');
    Route::get('vehicles-transportation-index', 'Admin\VehiclesTransportationController@index')->name('vehicles-transportation.index');
    Route::get('vehicles-transportation-create', 'Admin\VehiclesTransportationController@create')->name('vehicles-transportation.create');
    Route::get('vehicles-transportation-search', 'Admin\VehiclesTransportationController@search')->name('vehicles-transportation.search');
    Route::get('vehicles-transportation-find', 'Admin\VehiclesTransportationController@vehiclesTransportationFind')->name('vehicles-transportation.find');
    Route::get('vehicles-transportation-approve-{id}', 'Admin\VehiclesTransportationController@approve')->name('vehicles-transportation.approve');

    Route::resource('/real-state-property', 'Admin\RealStatePropertyController');
    Route::get('real-state-property-index', 'Admin\RealStatePropertyController@index')->name('real-state-property.index');
    Route::get('real-state-property-create', 'Admin\RealStatePropertyController@create')->name('real-state-property.create');
    Route::get('real-state-property-search', 'Admin\RealStatePropertyController@search')->name('real-state-property.search');
    Route::get('real-state-property-find', 'Admin\RealStatePropertyController@PropertyFind')->name('real-state-property.find');
    Route::get('real-state-property-approve-{id}', 'Admin\RealStatePropertyController@approve')->name('real-state-property.approve');

    Route::resource('/personal-advertisement', 'Admin\PersonalAdvertisementController');
    Route::get('personal-advertisement-index', 'Admin\PersonalAdvertisementController@index')->name('personal-advertisement.index');
    Route::get('personal-advertisement-create', 'Admin\PersonalAdvertisementController@create')->name('personal-advertisement.create');
    Route::get('personal-advertisement-search', 'Admin\PersonalAdvertisementController@search')->name('personal-advertisement.search');
    Route::get('personal-advertisement-find', 'Admin\PersonalAdvertisementController@personalAdvertisementFind')->name('personal-advertisement.find');
    Route::get('personal-advertisement-approve-{id}', 'Admin\PersonalAdvertisementController@approve')->name('personal-advertisement.approve');

    Route::resource('/division', 'Admin\DivisionController');
    Route::get('division-index', 'Admin\DivisionController@index')->name('division.index');
    Route::get('division-create', 'Admin\DivisionController@create')->name('division.create');

    Route::resource('/district', 'Admin\DistrictController');
    Route::get('district-index', 'Admin\DistrictController@index')->name('district.index');
    Route::get('district-create', 'Admin\DistrictController@create')->name('district.create');

    Route::resource('/cv-upload', 'Admin\CvUploadController');
    Route::get('cv-upload-index', 'Admin\CvUploadController@index')->name('cv-upload.index');
    Route::get('cv-upload-create', 'Admin\CvUploadController@create')->name('cv-upload.create');
    Route::get('cv-upload-search', 'Admin\CvUploadController@search')->name('cv-upload.search');
    Route::get('cv-upload-find', 'Admin\CvUploadController@cvBankFind')->name('cv-upload.find');
    Route::get('cv-upload-approve-{id}', 'Admin\CvUploadController@approve')->name('cv-upload.approve');

    Route::resource('/vacancy-announcement', 'Admin\VacancyAnnouncementController');
    Route::get('vacancy-announcement-index', 'Admin\VacancyAnnouncementController@index')->name('vacancy-announcement.index');
    Route::get('vacancy-announcement-create', 'Admin\VacancyAnnouncementController@create')->name('vacancy-announcement.create');
    Route::get('vacancy-announcement-search', 'Admin\VacancyAnnouncementController@search')->name('vacancy-announcement.search');
    Route::get('vacancy-announcement-find', 'Admin\VacancyAnnouncementController@vacancyAnnouncementFind')->name('vacancy-announcement.find');
    Route::get('vacancy-announcement-approve-{id}', 'Admin\VacancyAnnouncementController@approve')->name('vacancy-announcement.approve');

    Route::resource('/tvc', 'Admin\TvcController');
    Route::get('tvc-index', 'Admin\TvcController@index')->name('tvc.index');
    Route::get('tvc-create', 'Admin\TvcController@create')->name('tvc.create');
    Route::get('tvc-search', 'Admin\TvcController@search')->name('tvc.search');
    Route::get('tvc-find', 'Admin\TvcController@tvcFind')->name('tvc.find');
    Route::get('tvc-find-approve-{id}', 'Admin\TvcController@approve')->name('tvc.approve');

    Route::resource('/auto-tv', 'Admin\AutoTvController');
    Route::get('auto-tv-index', 'Admin\AutoTvController@index')->name('auto-tv.index');
    Route::get('auto-tv-create', 'Admin\AutoTvController@create')->name('auto-tv.create');
    Route::get('auto-tv-find', 'Admin\AutoTvController@autoTvFind')->name('auto-tv.find');
    Route::get('auto-tv-find-approve-{id}', 'Admin\AutoTvController@approve')->name('auto-tv.approve');

    Route::resource('/subscribe', 'Admin\SubscribeController');
    Route::get('subscribe-index', 'Admin\SubscribeController@index')->name('subscribe.index');
    Route::get('subscribe-create', 'Admin\SubscribeController@create')->name('subscribe.create');
    Route::get('subscribe-search', 'Admin\SubscribeController@search')->name('subscribe.search');
    Route::get('subscribe-find', 'Admin\SubscribeController@subscribeFind')->name('subscribe.find');


//  for sms
    Route::get('wp_bulk_sms-send', 'Admin\BulkSMSController@send' )->name('wp_sms.send');
    Route::post('send_message','Admin\BulkSMSController@sendStore' )->name('wp_bulk_sms.send_store');

//    left right footer banner
    Route::resource('/footer-banner', 'Admin\FooterBannerController');
    Route::get('footer-banner-index', 'Admin\FooterBannerController@index')->name('footer-banner.index');
    Route::get('footer-banner-create', 'Admin\FooterBannerController@create')->name('footer-banner.create');
    Route::get('footer-banner-search', 'Admin\FooterBannerController@search')->name('footer-banner.search');
    Route::get('footer-banner-find', 'Admin\FooterBannerController@footerBannerFind')->name('footer-banner.find');
    Route::get('footer-banner-find-approve-{id}', 'Admin\FooterBannerController@approve')->name('footer-banner.approve');

    Route::resource('/left-feature-banner', 'Admin\LeftFeatureAdsController');
    Route::get('left-feature-banner-index', 'Admin\LeftFeatureAdsController@index')->name('left-feature-banner.index');
    Route::get('left-feature-banner-create', 'Admin\LeftFeatureAdsController@create')->name('left-feature-banner.create');
    Route::get('left-feature-banner-search', 'Admin\LeftFeatureAdsController@search')->name('left-feature-banner.search');
    Route::get('left-feature-banner-find', 'Admin\LeftFeatureAdsController@LeftFeatureBannerFind')->name('left-feature-banner.find');
    Route::get('left-feature-banner-find-approve-{id}', 'Admin\LeftFeatureAdsController@approve')->name('left-feature-banner.approve');

    Route::resource('/right-banner', 'Admin\RightBannerController');
    Route::get('right-banner-index', 'Admin\RightBannerController@index')->name('right-banner.index');
    Route::get('right-banner-create', 'Admin\RightBannerController@create')->name('right-banner.create');
    Route::get('right-banner-search', 'Admin\RightBannerController@search')->name('right-banner.search');
    Route::get('right-banner-find', 'Admin\RightBannerController@rightBannerFind')->name('right-banner.find');
    Route::get('right-banner-find-approve-{id}', 'Admin\RightBannerController@approve')->name('right-banner.approve');


    Route::resource('/top-banner', 'Admin\TopBannerController');
    Route::get('top-banner-index', 'Admin\TopBannerController@index')->name('top-banner.index');
    Route::get('top-banner-create', 'Admin\TopBannerController@create')->name('top-banner.create');
    Route::get('top-banner-search', 'Admin\TopBannerController@search')->name('top-banner.search');
    Route::get('top-banner-find', 'Admin\TopBannerController@TopBannerFind')->name('top-banner.find');
    Route::get('top-banner-find-approve-{id}', 'Admin\TopBannerController@approve')->name('top-banner.approve');

    Route::resource('/ads-pricing', 'Admin\AdsPricingController');
    Route::get('ads-pricing-index', 'Admin\AdsPricingController@index')->name('ads-pricing.index');
    Route::get('ads-pricing-create', 'Admin\AdsPricingController@create')->name('ads-pricing.create');
    Route::get('ads-pricing-search', 'Admin\AdsPricingController@search')->name('ads-pricing.search');
    Route::get('ads-pricing-find', 'Admin\AdsPricingController@adsPricingFind')->name('ads-pricing.find');
    Route::get('ads-pricing-find-approve-{id}', 'Admin\AdsPricingController@approve')->name('ads-pricing.approve');

//    for front show
    Route::get('front-tvc-index', 'Admin\TvcController@frontShow')->name('front.tvc.index');
    Route::get('front-vacancy-announcement-index', 'Admin\VacancyAnnouncementController@frontShow')->name('front-vacancy-announcement.index');
    Route::get('front-division-index', 'Admin\DivisionController@frontShow')->name('front-division.index');
    Route::get('front-district-index', 'Admin\DistrictController@frontShow')->name('front-district.index');
    Route::get('front-all-ads-index', 'Admin\MobileController@addFrontShow')->name('all-ads.index');
    Route::get('front-search-index', 'Admin\MobileController@searchFrontEnd')->name('search.frontend.index');
    Route::get('front-auto-tv-index', 'Admin\AutoTvController@frontShow')->name('front-auto-tv.index');
    Route::get('front-left-feature-banner-index', 'Admin\LeftFeatureAdsController@frontShow')->name('front-left-feature-banner');
    Route::get('front-right-banner-index', 'Admin\RightBannerController@frontShow')->name('front-right-banner');
    Route::get('front-footer-banner-index', 'Admin\FooterBannerController@frontShow')->name('front-footer-banner');
    Route::get('front-top-banner-index', 'Admin\TopBannerController@frontShow')->name('front-top-banner');
    Route::get('front-ads-pricing', 'Admin\AdsPricingController@frontShow')->name('front-ads-pricing');
});
