<?php

namespace App\Http\Controllers\Admin;

use App\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = Service::orderBy('id','DESC')->paginate(20);
        return view('backend.category.service.index',compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.category.service.create');
    }

    public function store(Request $request)
    {
        foreach($request->file('image') as $image){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/BackEnd/images/product/',$image_name);
            $product_images[]=$image_name;
        }

        Service::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'title'=>$request-> title,
            'product_name'=>$request-> product_name,
            'item_type'=>$request-> item_type,
            'price'=>$request-> price,
            'others'=>$request-> others,
            'description'=>$request-> description,
            'price_on_call'=>$request-> price_on_call,
            'image'=>json_encode($product_images),
        ]);
        Session::flash('success','Ads Created Successfully');
        return redirect()->route('service.index');
    }

    public function show($id)
    {
        $show=Service::find($id);
        $show['image']=explode(',',str_replace(str_split('[]""'),'',$show->image));
        return view('backend.category.service.show',compact('show'));
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
        $delete = Service::find($id);
        $delete['image']=explode(',',str_replace(str_split('[]""'),'',$delete->image));
        for($i=0; $i<count($delete->image) ; $i++){
            if(!empty($delete->image[$i])){
                unlink('assets/BackEnd/images/product/'.$delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success','Ads Deleted Successfully');
        return redirect()->route('service.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = Service::where('title', 'like', "%$input%")
            ->orWhere('product_name', 'like', "%$input%")
            ->orWhere('item_type', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('others', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.service.index',compact('allAds'));
    }

    public function serviceFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = Service::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.service.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = Service::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('service.index');
    }
}
