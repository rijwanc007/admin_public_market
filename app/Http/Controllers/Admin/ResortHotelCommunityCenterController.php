<?php

namespace App\Http\Controllers\Admin;

use App\ResortHotelCommunity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ResortHotelCommunityCenterController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = ResortHotelCommunity::orderBy('id','DESC')->paginate(20);
        return view('backend.category.resort-hotel-community-center.index',compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.category.resort-hotel-community-center.create');
    }

    public function store(Request $request)
    {
        foreach($request->file('image') as $image){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/BackEnd/images/product/',$image_name);
            $product_images[]=$image_name;
        }

        ResortHotelCommunity::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'title'=>$request-> title,
            'condition'=>$request-> condition,
            'type'=>$request-> type,
            'price'=>$request-> price,
            'others'=>$request-> others,
            'description'=>$request-> description,
            'price_on_call'=>$request-> price_on_call,
            'image'=>json_encode($product_images),
        ]);
        Session::flash('success','Ads Created Successfully');
        return redirect()->route('resort-hotel-community-center.index');
    }

    public function show($id)
    {
        $show=ResortHotelCommunity::find($id);
        $show['image']=explode(',',str_replace(str_split('[]""'),'',$show->image));
        return view('backend.category.resort-hotel-community-center.show',compact('show'));
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
        $delete = ResortHotelCommunity::find($id);
        $delete['image']=explode(',',str_replace(str_split('[]""'),'',$delete->image));
        for($i=0; $i<count($delete->image) ; $i++){
            if(!empty($delete->image[$i])){
                unlink('assets/BackEnd/images/product/'.$delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success','Ads Deleted Successfully');
        return redirect()->route('resort-hotel-community-center.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = ResortHotelCommunity::where('title', 'like', "%$input%")
            ->orWhere('condition', 'like', "%$input%")
            ->orWhere('type', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('others', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.resort-hotel-community-center.index',compact('allAds'));
    }

    public function resortHotelFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = ResortHotelCommunity::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.resort-hotel-community-center.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = ResortHotelCommunity::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('resort-hotel-community-center.index');
    }
}
