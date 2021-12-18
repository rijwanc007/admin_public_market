<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\LeftFeatureAds;

class LeftFeatureAdsController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = LeftFeatureAds::orderBy('id','DESC')->paginate(10);
        return view('backend.left-feature-banner.index',compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.left-feature-banner.create');
    }

    public function store(Request $request)
    {
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/BackEnd/images/banner/',$document_name);

        LeftFeatureAds::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'company_name'=>$request-> company_name,
            'title'=>$request-> title,
            'description'=>$request-> description,
            'image'=>$document_name,
        ]);

        Session()->flash('success', 'Left Feature Banner added successfully.');
        return redirect()->route('left-feature-banner.index');
    }

    public function show($id)
    {
        $show=LeftFeatureAds::find($id);
        return view('backend.left-feature-banner.show',compact('show'));
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
        $Tvc = LeftFeatureAds::find($id);
        if(!empty($Tvc->image)){
            unlink('assets/BackEnd/images/banner/'.$Tvc->image);
        }
        $Tvc->delete();
        Session()->flash('success', 'Left Feature Banner has deleted successfully !!');
        return back();
    }

    public function search(Request $request){
        $input = $request->input;
        $allAds = LeftFeatureAds::where('company_name', 'like', "%$input%")
            ->orWhere('title', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.left-feature-banner.index',compact('allAds'));
    }

    public function LeftFeatureBannerFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = LeftFeatureAds::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.left-feature-banner.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = LeftFeatureAds::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('left-feature-banner.index');
    }

    public function frontShow(){
        $all_ads = LeftFeatureAds::orderBy('id','DESC')->get();
        dd($all_ads);
    }
}
