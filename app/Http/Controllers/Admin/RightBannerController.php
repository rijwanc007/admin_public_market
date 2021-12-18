<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\RightBanner;

class RightBannerController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = RightBanner::orderBy('id','DESC')->paginate(10);
        return view('backend.right-banner.index',compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.right-banner.create');
    }

    public function store(Request $request)
    {
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/BackEnd/images/banner/',$document_name);

        RightBanner::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'company_name'=>$request-> company_name,
            'title'=>$request-> title,
            'description'=>$request-> description,
            'image'=>$document_name,
        ]);

        Session()->flash('success', 'Right Banner added successfully.');
        return redirect()->route('right-banner.index');
    }

    public function show($id)
    {
        $show=RightBanner::find($id);
        return view('backend.right-banner.show',compact('show'));
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
        $Tvc = RightBanner::find($id);
        if(!empty($Tvc->image)){
            unlink('assets/BackEnd/images/banner/'.$Tvc->image);
        }
        $Tvc->delete();
        Session()->flash('success', 'Right Banner has deleted successfully !!');
        return back();
    }

    public function search(Request $request){
        $input = $request->input;
        $allAds = RightBanner::where('company_name', 'like', "%$input%")
            ->orWhere('title', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.right-banner.index',compact('allAds'));
    }

    public function rightBannerFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = RightBanner::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.right-banner.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = RightBanner::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('right-banner.index');
    }

    public function frontShow(){
        $all_ads = RightBanner::orderBy('id','DESC')->get();
        dd($all_ads);
    }
}
