<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Subscribe;

class SubscribeController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = Subscribe::orderBy('id','DESC')->paginate(10);
        return view('backend.subscribe.index',compact('allAds','from','to'));
    }


    public function create()
    {
        return view('backend.subscribe.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:subscribes',
        ]);
        Subscribe::create([
            'email'=>$request->email,
        ]);
        Session::flash('success','Thanks for Subscribe!');
        return back();
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
        $subscribe = Subscribe::find($id);
        if (!is_null($subscribe)) {
            $subscribe->delete();
        }
        session()->flash('success', 'Subscribe has deleted successfully !!');
        return back();
    }
    public function subscribeFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = Subscribe::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.subscribe.index',compact('allAds','from','to'));
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = Subscribe::where('email', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(10);
        return view('backend.subscribe.index',compact('allAds'));
    }
}
