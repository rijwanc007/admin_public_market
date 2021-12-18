<?php

namespace App\Http\Controllers\Admin;

use App\BusinessIndustry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BusinessIndustryController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = BusinessIndustry::orderBy('id','DESC')->paginate(20);
        return view('backend.category.business-industry.index',compact('allAds','from','to'));
    }


    public function create()
    {
        return view('backend.category.business-industry.create');
    }


    public function store(Request $request)
    {
        foreach($request->file('image') as $image){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/BackEnd/images/product/',$image_name);
            $product_images[]=$image_name;
        }

        BusinessIndustry::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'title'=>$request-> title,
            'product_name'=>$request-> product_name,
            'brand'=>$request-> brand,
            'condition'=>$request-> condition,
            'item_type'=>$request-> item_type,
            'price'=>$request-> price,
            'others'=>$request-> others,
            'description'=>$request-> description,
            'price_on_call'=>$request-> price_on_call,
            'image'=>json_encode($product_images),
        ]);
        Session::flash('success','Ads Created Successfully');
        return redirect()->route('business-industry.index');
    }


    public function show($id)
    {
        $show=BusinessIndustry::find($id);
        $show['image']=explode(',',str_replace(str_split('[]""'),'',$show->image));
        return view('backend.category.business-industry.show',compact('show'));
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
        $delete = BusinessIndustry::find($id);
        $delete['image']=explode(',',str_replace(str_split('[]""'),'',$delete->image));
        for($i=0; $i<count($delete->image) ; $i++){
            if(!empty($delete->image[$i])){
                unlink('assets/BackEnd/images/product/'.$delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success','Ads Deleted Successfully');
        return redirect()->route('business-industry.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = BusinessIndustry::where('title', 'like', "%$input%")
            ->orWhere('product_name', 'like', "%$input%")
            ->orWhere('brand', 'like', "%$input%")
            ->orWhere('condition', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('others', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.business-industry.index',compact('allAds'));
    }

    public function businessIndustryFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = BusinessIndustry::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.business-industry.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = BusinessIndustry::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('business-industry.index');
    }
}
