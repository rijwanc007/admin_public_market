<?php

namespace App\Http\Controllers\Admin;

use App\TourTravel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TourTravelController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = TourTravel::orderBy('id','DESC')->paginate(20);
        return view('backend.category.tour-travel.index',compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.category.tour-travel.create');
    }

    public function store(Request $request)
    {
        foreach($request->file('image') as $image){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/BackEnd/images/product/',$image_name);
            $product_images[]=$image_name;
        }

        TourTravel::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'title'=>$request-> title,
            'from'=>$request-> from,
            'destination'=>$request-> destination,
            'condition'=>$request-> condition,
            'type'=>$request-> type,
            'price'=>$request-> price,
            'others'=>$request-> others,
            'description'=>$request-> description,
            'price_on_call'=>$request-> price_on_call,
            'image'=>json_encode($product_images),
        ]);
        Session::flash('success','Ads Created Successfully');
        return redirect()->route('tour-travel.index');
    }

    public function show($id)
    {
        $show=TourTravel::find($id);
        $show['image']=explode(',',str_replace(str_split('[]""'),'',$show->image));
        return view('backend.category.tour-travel.show',compact('show'));
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
        $delete = TourTravel::find($id);
        $delete['image']=explode(',',str_replace(str_split('[]""'),'',$delete->image));
        for($i=0; $i<count($delete->image) ; $i++){
            if(!empty($delete->image[$i])){
                unlink('assets/BackEnd/images/product/'.$delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success','Ads Deleted Successfully');
        return redirect()->route('tour-travel.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = TourTravel::where('title', 'like', "%$input%")
            ->orWhere('from', 'like', "%$input%")
            ->orWhere('destination', 'like', "%$input%")
            ->orWhere('condition', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('type', 'like', "%$input%")
            ->orWhere('others', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.tour-travel.index',compact('allAds'));
    }

    public function tourTravelFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = TourTravel::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.tour-travel.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = TourTravel::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('tour-travel.index');
    }
}
