<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use App\Tvc;
use Illuminate\Support\Facades\Session;


class TvcController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = Tvc::orderBy('id','DESC')->paginate(10);
        return view('backend.tvc.index',compact('allAds','from','to'));
    }


    public function create()
    {
        return view('backend.tvc.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,dat,mkv,wmv,avi|max:5120',
        ]);

        $document = $request->file('video');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/BackEnd/images/tvc/',$document_name);

        Tvc::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'company_name'=>$request-> company_name,
            'tvc_title'=>$request-> tvc_title,
            'description'=>$request-> description,
            'video'=>$document_name,
        ]);

        Session()->flash('success', 'Tvc added successfully.');
        return redirect()->route('tvc.index');
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
        $Tvc = Tvc::find($id);
            if(!empty($Tvc->video)){
                unlink('assets/BackEnd/images/tvc/'.$Tvc->video);
            }
            $Tvc->delete();
        Session()->flash('success', 'Tvc has deleted successfully !!');
        return back();
    }

    public function search(Request $request){
        $input = $request->input;
        $allAds = Tvc::where('company_name', 'like', "%$input%")
            ->orWhere('tvc_title', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.tvc.index',compact('allAds'));
    }

    public function tvcFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = Tvc::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.tvc.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = tvc::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('tvc.index');
    }

    public function frontShow(){
        $all_tvc = Tvc::orderBy('id','DESC')->get();
        dd($all_tvc);
    }
}
