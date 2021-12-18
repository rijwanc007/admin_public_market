<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\District;
use App\Division;
use File;
use Illuminate\Http\Request;

class DistrictController extends Controller
{

    public function index()
    {
        $allAds = District::orderBy('id', 'DESC')->paginate(10);
        return view('backend.district.index', compact('allAds'));
    }

    public function create()
    {
        $divisions = Division::orderBy('id', 'DESC')->get();
        return view('backend.district.create', compact('divisions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/BackEnd/images/district/',$document_name);
        District::create([
            'name'=>$request->name,
            'division_id'=>$request->division_id,
            'image'=>$document_name,
        ]);
        session()->flash('success', 'District added successfully.');
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
        $district = District::find($id);
        if(!empty($district->image)){
            unlink('assets/BackEnd/images/district/'.$district->image);
        }
        $district->delete();
        session()->flash('success', 'District has deleted successfully !!');
        return back();
    }

    public function frontShow(){
        $district = District::orderBy('id','DESC')->get();
        dd($district);
    }
}
