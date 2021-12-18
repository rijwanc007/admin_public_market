<?php

namespace App\Http\Controllers\Admin;

use App\RentToLet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RentToLetController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = RentToLet::orderBy('id','DESC')->paginate(20);
        return view('backend.category.rent-to-let.index',compact('allAds','from','to'));
    }


    public function create()
    {
        return view('backend.category.rent-to-let.create');
    }


    public function store(Request $request)
    {
        foreach($request->file('image') as $image){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/BackEnd/images/product/',$image_name);
            $product_images[]=$image_name;
        }

        RentToLet::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'title'=>$request-> title,
            'beds'=>$request-> beds,
            'baths'=>$request-> baths,
            'land_size'=>$request-> land_size,
            'land_size_unit'=>$request-> land_size_unit,
            'address'=>$request-> address,
            'house_size'=>$request-> house_size,
            'house_size_unit'=>$request-> house_size_unit,
            'price'=>$request-> price,
            'others'=>$request-> others,
            'description'=>$request-> description,
            'price_on_call'=>$request-> price_on_call,
            'image'=>json_encode($product_images),
        ]);
        Session::flash('success','Ads Created Successfully');
        return redirect()->route('rent-to-let.index');
    }


    public function show($id)
    {
        $show=RentToLet::find($id);
        $show['image']=explode(',',str_replace(str_split('[]""'),'',$show->image));
        return view('backend.category.rent-to-let.show',compact('show'));
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
        $delete = RentToLet::find($id);
        $delete['image']=explode(',',str_replace(str_split('[]""'),'',$delete->image));
        for($i=0; $i<count($delete->image) ; $i++){
            if(!empty($delete->image[$i])){
                unlink('assets/BackEnd/images/product/'.$delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success','Ads Deleted Successfully');
        return redirect()->route('rent-to-let.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = RentToLet::where('title', 'like', "%$input%")
            ->orWhere('beds', 'like', "%$input%")
            ->orWhere('baths', 'like', "%$input%")
            ->orWhere('land_size', 'like', "%$input%")
            ->orWhere('land_size_unit', 'like', "%$input%")
            ->orWhere('address', 'like', "%$input%")
            ->orWhere('house_size', 'like', "%$input%")
            ->orWhere('house_size_unit', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('others', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.rent-to-let.index',compact('allAds'));
    }

    public function rentToLetFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = RentToLet::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.rent-to-let.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = RentToLet::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('rent-to-let.index');
    }
}
