<?php

namespace App\Http\Controllers\Admin;

use App\Health_Beauty;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class healthBeautyController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = Health_Beauty::orderBy('id','DESC')->paginate(20);
        return view('backend.category.health-beauty.index',compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.category.health-beauty.create');
    }

    public function store(Request $request)
    {
        foreach($request->file('image') as $image){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/BackEnd/images/product/',$image_name);
            $product_images[]=$image_name;
        }

        Health_Beauty::create([
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
        return redirect()->route('health-beauty.index');
    }

    public function show($id)
    {
        $show=Health_Beauty::find($id);
        $show['image']=explode(',',str_replace(str_split('[]""'),'',$show->image));
        return view('backend.category.health-beauty.show',compact('show'));
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
        $delete = Health_Beauty::find($id);
        $delete['image']=explode(',',str_replace(str_split('[]""'),'',$delete->image));
        for($i=0; $i<count($delete->image) ; $i++){
            if(!empty($delete->image[$i])){
                unlink('assets/BackEnd/images/product/'.$delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success','Ads Deleted Successfully');
        return redirect()->route('health-beauty.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = Health_Beauty::where('title', 'like', "%$input%")
            ->orWhere('product_name', 'like', "%$input%")
            ->orWhere('brand', 'like', "%$input%")
            ->orWhere('condition', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('others', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.health-beauty.index',compact('allAds'));
    }

    public function healthBeautyFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = Health_Beauty::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.health-beauty.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = Health_Beauty::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('health-beauty.index');
    }

}
