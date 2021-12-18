<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\FooterBanner;

class FooterBannerController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = FooterBanner::orderBy('id','DESC')->paginate(10);
        return view('backend.footer-banner.index',compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.footer-banner.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/BackEnd/images/banner/',$document_name);

        FooterBanner::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'company_name'=>$request-> company_name,
            'title'=>$request-> title,
            'description'=>$request-> description,
            'image'=>$document_name,
        ]);

        Session()->flash('success', 'Footer Banner added successfully.');
        return redirect()->route('footer-banner.index');
    }

    public function show($id)
    {
        $show=FooterBanner::find($id);
        return view('backend.footer-banner.show',compact('show'));
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
        $Tvc = FooterBanner::find($id);
        if(!empty($Tvc->image)){
            unlink('assets/BackEnd/images/banner/'.$Tvc->image);
        }
        $Tvc->delete();
        Session()->flash('success', 'Footer Banner has deleted successfully !!');
        return back();
    }

    public function search(Request $request){
        $input = $request->input;
        $allAds = FooterBanner::where('company_name', 'like', "%$input%")
            ->orWhere('title', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.footer-banner.index',compact('allAds'));
    }

    public function footerBannerFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = FooterBanner::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.footer-banner.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = FooterBanner::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('footer-banner.index');
    }

    public function frontShow(){
        $all_ads = FooterBanner::orderBy('id','DESC')->get();
        dd($all_ads);
    }
}
