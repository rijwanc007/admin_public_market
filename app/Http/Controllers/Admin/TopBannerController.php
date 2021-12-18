<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\TopBanner;

class TopBannerController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = TopBanner::orderBy('id','DESC')->paginate(10);
        return view('backend.top-banner.index',compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.top-banner.create');
    }

    public function store(Request $request)
    {
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/BackEnd/images/banner/',$document_name);

        TopBanner::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'company_name'=>$request-> company_name,
            'title'=>$request-> title,
            'description'=>$request-> description,
            'image'=>$document_name,
        ]);

        Session()->flash('success', 'Top Banner added successfully.');
        return redirect()->route('top-banner.index');
    }

    public function show($id)
    {
        $show=TopBanner::find($id);
        return view('backend.top-banner.show',compact('show'));
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
        $Tvc = TopBanner::find($id);
        if(!empty($Tvc->image)){
            unlink('assets/BackEnd/images/banner/'.$Tvc->image);
        }
        $Tvc->delete();
        Session()->flash('success', 'Top Banner has deleted successfully !!');
        return back();
    }

    public function search(Request $request){
        $input = $request->input;
        $allAds = TopBanner::where('company_name', 'like', "%$input%")
            ->orWhere('title', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.top-banner.index',compact('allAds'));
    }

    public function TopBannerFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = TopBanner::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.top-banner.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = TopBanner::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('top-banner.index');
    }

    public function frontShow(){
        $all_ads = TopBanner::orderBy('id','DESC')->get();
        dd($all_ads);
    }
}
