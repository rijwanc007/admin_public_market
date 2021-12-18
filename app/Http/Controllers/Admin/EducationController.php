<?php

namespace App\Http\Controllers\Admin;

use App\Education;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = Education::orderBy('id','DESC')->paginate(20);
        return view('backend.category.education.index',compact('allAds','from','to'));
    }

    public function create()
    {
        return view('backend.category.education.create');
    }

    public function store(Request $request)
    {
        foreach($request->file('image') as $image){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/BackEnd/images/product/',$image_name);
            $product_images[]=$image_name;
        }

        Education::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'title'=>$request-> title,
            'product_name'=>$request-> product_name,
            'condition'=>$request-> condition,
            'item_type'=>$request-> item_type,
            'price'=>$request-> price,
            'others'=>$request-> others,
            'description'=>$request-> description,
            'price_on_call'=>$request-> price_on_call,
            'image'=>json_encode($product_images),
        ]);
        Session::flash('success','Ads Created Successfully');
        return redirect()->route('education.index');
    }


    public function show($id)
    {
        $show=Education::find($id);
        $show['image']=explode(',',str_replace(str_split('[]""'),'',$show->image));
        return view('backend.category.education.show',compact('show'));
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
        if (!is_null($division)) {
            // Delete image
            if (File::exists('/assets/BackEnd/images/product/'.$division->image)) {
                File::delete('/assets/BackEnd/images/product/'.$division->image);
            }
            $division->delete();
        }
        session()->flash('success', 'Division has deleted successfully !!');
        return back();
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = Education::where('title', 'like', "%$input%")
            ->orWhere('product_name', 'like', "%$input%")
            ->orWhere('condition', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('others', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.education.index',compact('allAds'));
    }

    public function educationFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = Education::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.education.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = Education::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('education.index');
    }
}
