<?php

namespace App\Http\Controllers\Admin;

use App\PersonalAdvertisement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PersonalAdvertisementController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = PersonalAdvertisement::orderBy('id','DESC')->paginate(20);
        return view('backend.category.personal-advertisement.index',compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.category.personal-advertisement.create');
    }

    public function store(Request $request)
    {
        foreach($request->file('image') as $image){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/BackEnd/images/product/',$image_name);
            $product_images[]=$image_name;
        }

        PersonalAdvertisement::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'title'=>$request-> title,
            'name'=>$request-> name,
            'email'=>$request-> email,
            'phone'=>$request-> phone,
            'education'=>$request-> education,
            'training'=>$request-> training,
            'current_position'=>$request-> current_position,
            'country'=>$request-> country,
            'city'=>$request-> city,
            'gender'=>$request-> gender,
            'experience'=>$request-> experience,
            'price'=>$request-> price,
            'description'=>$request-> description,
            'price_on_call'=>$request-> price_on_call,
            'image'=>json_encode($product_images),
        ]);
        Session::flash('success','Ads Created Successfully');
        return redirect()->route('personal-advertisement.index');
    }

    public function show($id)
    {
        $show=PersonalAdvertisement::find($id);
        $show['image']=explode(',',str_replace(str_split('[]""'),'',$show->image));
        return view('backend.category.personal-advertisement.show',compact('show'));
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
        $delete = PersonalAdvertisement::find($id);
        $delete['image']=explode(',',str_replace(str_split('[]""'),'',$delete->image));
        for($i=0; $i<count($delete->image) ; $i++){
            if(!empty($delete->image[$i])){
                unlink('assets/BackEnd/images/product/'.$delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success','Ads Deleted Successfully');
        return redirect()->route('personal-advertisement.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = PersonalAdvertisement::where('title', 'like', "%$input%")
            ->orWhere('name', 'like', "%$input%")
            ->orWhere('email', 'like', "%$input%")
            ->orWhere('phone', 'like', "%$input%")
            ->orWhere('education', 'like', "%$input%")
            ->orWhere('training', 'like', "%$input%")
            ->orWhere('current_position', 'like', "%$input%")
            ->orWhere('country', 'like', "%$input%")
            ->orWhere('city', 'like', "%$input%")
            ->orWhere('gender', 'like', "%$input%")
            ->orWhere('experience', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.personal-advertisement.index',compact('allAds'));
    }

    public function personalAdvertisementFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = PersonalAdvertisement::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.personal-advertisement.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = PersonalAdvertisement::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('personal-advertisement.index');
    }
}
