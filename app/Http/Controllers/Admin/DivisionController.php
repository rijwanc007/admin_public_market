<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Division;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DivisionController extends Controller
{

    public function index()
    {
        $allAds = Division::orderBy('id', 'DESC')->paginate(10);
        return view('backend.division.index', compact('allAds'));
    }


    public function create()
    {
        return view('backend.division.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/BackEnd/images/division/',$document_name);
        Division::create([
            'name'=>$request->name,
            'image'=>$document_name,
        ]);
        session()->flash('success', 'Division added successfully.');
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
        $division = Division::find($id);
        if(!empty($division->image)){
            unlink('assets/BackEnd/images/division/'.$division->image);
        }
            $division->delete();

        session()->flash('success', 'Division has deleted successfully !!');
        return back();
    }

    public function frontShow(){
        $all_division = Division::orderBy('id','DESC')->get();
        dd($all_division);
    }
}
