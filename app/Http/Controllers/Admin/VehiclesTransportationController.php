<?php

namespace App\Http\Controllers\Admin;

use App\VehicleTransportation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VehiclesTransportationController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = VehicleTransportation::orderBy('id','DESC')->paginate(20);
        return view('backend.category.vehicles-transportation.index',compact('allAds','from','to'));
    }


    public function create()
    {
        return view('backend.category.vehicles-transportation.create');
    }


    public function store(Request $request)
    {
        foreach($request->file('image') as $image){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/BackEnd/images/product/',$image_name);
            $product_images[]=$image_name;
        }

        VehicleTransportation::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'title'=>$request-> title,
            'product_name'=>$request-> product_name,
            'brand'=>$request-> brand,
            'condition'=>$request-> condition,
            'model'=>$request-> model,
            'edition'=>$request-> edition,
            'year_of_manufacture'=>$request-> year_of_manufacture,
            'kilometers_run'=>$request-> kilometers_run,
            'engine_capacity'=>$request-> engine_capacity,
            'segment'=>$request-> segment,
            'wheel_size'=>$request-> wheel_size,
            'color'=>$request-> color,
            'item_type'=>$request-> item_type,
            'price'=>$request-> price,
            'others'=>$request-> others,
            'description'=>$request-> description,
            'price_on_call'=>$request-> price_on_call,
            'image'=>json_encode($product_images),
        ]);
        Session::flash('success','Ads Created Successfully');
        return redirect()->route('vehicles-transportation.index');
    }


    public function show($id)
    {
        $show=VehicleTransportation::find($id);
        $show['image']=explode(',',str_replace(str_split('[]""'),'',$show->image));
        return view('backend.category.vehicles-transportation.show',compact('show'));
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
        $delete = VehicleTransportation::find($id);
        $delete['image']=explode(',',str_replace(str_split('[]""'),'',$delete->image));
        for($i=0; $i<count($delete->image) ; $i++){
            if(!empty($delete->image[$i])){
                unlink('assets/BackEnd/images/product/'.$delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success','Ads Deleted Successfully');
        return redirect()->route('vehicles-transportation.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = VehicleTransportation::where('title', 'like', "%$input%")
            ->orWhere('product_name', 'like', "%$input%")
            ->orWhere('brand', 'like', "%$input%")
            ->orWhere('condition', 'like', "%$input%")
            ->orWhere('model', 'like', "%$input%")
            ->orWhere('edition', 'like', "%$input%")
            ->orWhere('year_of_manufacture', 'like', "%$input%")
            ->orWhere('kilometers_run', 'like', "%$input%")
            ->orWhere('engine_capacity', 'like', "%$input%")
            ->orWhere('segment', 'like', "%$input%")
            ->orWhere('wheel_size', 'like', "%$input%")
            ->orWhere('color', 'like', "%$input%")
            ->orWhere('item_type', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('others', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.vehicles-transportation.index',compact('allAds'));
    }

    public function vehiclesTransportationFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = VehicleTransportation::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.vehicles-transportation.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = VehicleTransportation::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('vehicles-transportation.index');
    }
}
