<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\AutoTv;

class AutoTvController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = AutoTv::orderBy('id','DESC')->paginate(10);
        return view('backend.auto-tv.index',compact('allAds','from','to'));
    }


    public function create()
    {
        return view('backend.auto-tv.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,dat,mkv,wmv,avi|max:25000',
        ]);

        $document = $request->file('video');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/BackEnd/images/tvc/',$document_name);

        AutoTv::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'video'=>$document_name,
        ]);

        Session()->flash('success', 'Auto Tv added successfully.');
        return redirect()->route('auto-tv.index');
    }

    public function show($id)
    {
        //
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
        $Tvc = AutoTv::find($id);
        if(!empty($Tvc->video)){
            unlink('assets/BackEnd/images/tvc/'.$Tvc->video);
        }
        $Tvc->delete();
        Session()->flash('success', 'Auto Tv has deleted successfully !!');
        return back();
    }

    public function autoTvFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = AutoTv::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.auto-tv.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = AutoTv::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('auto-tv.index');
    }
    public function frontShow(){
        $auto_tv = AutoTv::orderBy('id','DESC')->get();
        dd($auto_tv);
    }
}
