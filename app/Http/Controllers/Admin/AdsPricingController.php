<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdsPricing;
use Illuminate\Support\Facades\Session;

class AdsPricingController extends Controller
{

    public function index()
    {
        $allAds = AdsPricing::orderBy('id','DESC')->paginate(10);
        $from = null;
        $to = null;
        return view('backend.ads-pricing.index', compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.ads-pricing.create');
    }

    public function store(Request $request)
    {
        AdsPricing::create([
            'user_id' =>$request-> user_id,
            'date' => $request-> date,
            'title' => $request->title,
            'description' => $request->description
        ]);

        Session::flash('success','Ads Created Successfully');
        return redirect()->route('ads-pricing.index');
    }


    public function show($id)
    {
        $show = AdsPricing::find($id);
        return view('backend.ads-pricing.show', compact('show'));
    }

    public function edit($id)
    {
        $edit = AdsPricing::find($id);
        return view('backend.ads-pricing.edit',compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = AdsPricing::find($id);
        $update->update([
            'user_id' =>$request-> user_id,
            'date' => $request-> date,
            'title' => $request->title,
            'description' => $request->description
        ]);

        Session::flash('success','Ads Pricing Updated Successfully');
        return redirect()->route('ads-pricing.index');
    }

    public function destroy($id)
    {
        $adsPricing = AdsPricing::find($id);
        $adsPricing->delete();
        Session()->flash('success', 'Ads Pricing has deleted successfully !!');
        return back();
    }
    public function adsPricingFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = AdsPricing::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(10);
        return view('backend.ads-pricing.index', compact('allAds','from','to'));
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = AdsPricing::where('title', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.ads-pricing.index',compact('allAds'));
    }
    public function approve($id){
        $approve = AdsPricing::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('ads-pricing.index');
    }
    public function frontShow(){
        $allAdsPricing = AdsPricing::orderBy('id','DESC')->get();
        dd($allAdsPricing);
    }

}
