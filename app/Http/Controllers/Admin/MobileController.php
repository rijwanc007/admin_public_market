<?php

namespace App\Http\Controllers\Admin;

use App\Mobile;
use App\AgricultureAgroProduct;
use App\BusinessIndustry;
use App\CompanyProductBranding;
use App\Daily_Essential_Product;
use App\Education;
use App\Electronic;
use App\FuelOilGas;
use App\GarmentsClothing;
use App\Health_Beauty;
use App\HobbySportBaby;
use App\Home_living;
use App\LocalBusinessPoint;
use App\Other;
use App\PersonalAdvertisement;
use App\PetAnimal;
use App\PmFoodBankRestaurant;
use App\RealStateProperty;
use App\RentToLet;
use App\ResortHotelCommunity;
use App\Service;
use App\TourTravel;
use App\VehicleTransportation;
use App\Division;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MobileController extends Controller
{

    public function index()
    {
        $from = null;
        $to = null;
        $allAds = Mobile::orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.mobile.index', compact('allAds', 'from', 'to'));
    }

    public function create()
    {
        return view('backend.category.mobile.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        foreach ($request->file('image') as $image) {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/assets/BackEnd/images/product/', $image_name);
            $product_images[] = $image_name;
        }

        Mobile::create([
            'user_id' => $request->user_id,
            'date' => $request->date,
            'title' => $request->title,
            'product_name' => $request->product_name,
            'brand' => $request->brand,
            'condition' => $request->condition,
            'processor' => $request->processor,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'color' => $request->color,
            'battery' => $request->battery,
            'charging_power' => $request->charging_power,
            'display' => $request->display,
            'camera' => $request->camera,
            'connectivity' => $request->connectivity,
            'feature' => $request->feature,
            'weight' => $request->weight,
            'price' => $request->price,
            'others' => $request->others,
            'description' => $request->description,
            'price_on_call' => $request->price_on_call,
            'image' => json_encode($product_images),
        ]);
        Session::flash('success', 'Ads Created Successfully');
        return redirect()->route('mobile.index');
    }


    public function show($id)
    {
        $show = Mobile::find($id);
        $show['image'] = explode(',', str_replace(str_split('[]""'), '', $show->image));
        return view('backend.category.mobile.show', compact('show'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //dd($id);
        $delete = Mobile::find($id);
        $delete['image'] = explode(',', str_replace(str_split('[]""'), '', $delete->image));
        for ($i = 0; $i < count($delete->image); $i++) {
            if (!empty($delete->image[$i])) {
                unlink('assets/BackEnd/images/product/' . $delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success', 'Ads Deleted Successfully');
        return redirect()->route('mobile.index');
    }

    public function search(Request $request)
    {
        $input = $request->input;
        $allAds = Mobile::where('title', 'like', "%$input%")
            ->orWhere('product_name', 'like', "%$input%")
            ->orWhere('brand', 'like', "%$input%")
            ->orWhere('condition', 'like', "%$input%")
            ->orWhere('processor', 'like', "%$input%")
            ->orWhere('storage', 'like', "%$input%")
            ->orWhere('color', 'like', "%$input%")
            ->orWhere('battery', 'like', "%$input%")
            ->orWhere('charging_power', 'like', "%$input%")
            ->orWhere('display', 'like', "%$input%")
            ->orWhere('camera', 'like', "%$input%")
            ->orWhere('connectivity', 'like', "%$input%")
            ->orWhere('feature', 'like', "%$input%")
            ->orWhere('weight', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('others', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.mobile.index', compact('allAds'));
    }

    public function mobileFind(Request $request)
    {
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = Mobile::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.mobile.index', compact('allAds', 'from', 'to'));
    }

    public function approve($id)
    {
        $approve = Mobile::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('mobile.index');
    }

    public function addFrontShow()
    {
        $mobile = Mobile::orderBy('id', 'DESC')->get();
        $agriculture_product = AgricultureAgroProduct::orderBy('id', 'DESC')->get();
        $business_industry = BusinessIndustry::orderBy('id', 'DESC')->get();
        $com_product_branding = CompanyProductBranding::orderBy('id', 'DESC')->get();
        $d_essential_product = Daily_Essential_Product::orderBy('id', 'DESC')->get();
        $education = Education::orderBy('id', 'DESC')->get();
        $electronic = Electronic::orderBy('id', 'DESC')->get();
        $fuel_oil_gas = FuelOilGas::orderBy('id', 'DESC')->get();
        $garments_clothing = GarmentsClothing::orderBy('id', 'DESC')->get();
        $health_beauty = Health_Beauty::orderBy('id', 'DESC')->get();
        $hobby_sports_baby = HobbySportBaby::orderBy('id', 'DESC')->get();
        $home_living = Home_living::orderBy('id', 'DESC')->get();
        $local_business_point = LocalBusinessPoint::orderBy('id', 'DESC')->get();
        $other = Other::orderBy('id', 'DESC')->get();
        $personal_adv = PersonalAdvertisement::orderBy('id', 'DESC')->get();
        $pet_animal = PetAnimal::orderBy('id', 'DESC')->get();
        $real_state_property = RealStateProperty::orderBy('id', 'DESC')->get();
        $rent_to_let = RentToLet::orderBy('id', 'DESC')->get();
        $resort_hotel_community = ResortHotelCommunity::orderBy('id', 'DESC')->get();
        $service = Service::orderBy('id', 'DESC')->get();
        $tour_travel = TourTravel::orderBy('id', 'DESC')->get();
        $vehicles_transportation = VehicleTransportation::orderBy('id', 'DESC')->get();
        dd([$mobile, $agriculture_product, $business_industry, $com_product_branding, $d_essential_product, $education, $electronic, $fuel_oil_gas,
            $garments_clothing, $health_beauty, $hobby_sports_baby, $home_living, $local_business_point, $other, $personal_adv, $pet_animal,
            $real_state_property, $real_state_property, $resort_hotel_community, $service, $tour_travel, $vehicles_transportation, $rent_to_let
        ]);
    }

    public function searchFrontEnd(){
        $mobile = Mobile::orderBy('id', 'DESC')->get();
        $agriculture_product = AgricultureAgroProduct::orderBy('id', 'DESC')->get();
        $business_industry = BusinessIndustry::orderBy('id', 'DESC')->get();
        $com_product_branding = CompanyProductBranding::orderBy('id', 'DESC')->get();
        $d_essential_product = Daily_Essential_Product::orderBy('id', 'DESC')->get();
        $education = Education::orderBy('id', 'DESC')->get();
        $electronic = Electronic::orderBy('id', 'DESC')->get();
        $fuel_oil_gas = FuelOilGas::orderBy('id', 'DESC')->get();
        $garments_clothing = GarmentsClothing::orderBy('id', 'DESC')->get();
        $health_beauty = Health_Beauty::orderBy('id', 'DESC')->get();
        $hobby_sports_baby = HobbySportBaby::orderBy('id', 'DESC')->get();
        $home_living = Home_living::orderBy('id', 'DESC')->get();
        $local_business_point = LocalBusinessPoint::orderBy('id', 'DESC')->get();
        $other = Other::orderBy('id', 'DESC')->get();
        $personal_adv = PersonalAdvertisement::orderBy('id', 'DESC')->get();
        $pet_animal = PetAnimal::orderBy('id', 'DESC')->get();
        $real_state_property = RealStateProperty::orderBy('id', 'DESC')->get();
        $rent_to_let = RentToLet::orderBy('id', 'DESC')->get();
        $resort_hotel_community = ResortHotelCommunity::orderBy('id', 'DESC')->get();
        $service = Service::orderBy('id', 'DESC')->get();
        $tour_travel = TourTravel::orderBy('id', 'DESC')->get();
        $vehicles_transportation = VehicleTransportation::orderBy('id', 'DESC')->get();
        $division = Division::orderBy('id','DESC')->get();
        dd([$mobile, $agriculture_product, $business_industry, $com_product_branding, $d_essential_product, $education, $electronic, $fuel_oil_gas,
            $garments_clothing, $health_beauty, $hobby_sports_baby, $home_living, $local_business_point, $other, $personal_adv, $pet_animal,
            $real_state_property, $real_state_property, $resort_hotel_community, $service, $tour_travel, $vehicles_transportation, $rent_to_let, $division
        ]);
    }

}
