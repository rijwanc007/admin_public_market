<?php

namespace App\Http\Controllers\Admin;

use App\PetAnimal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PetAnimalController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = PetAnimal::orderBy('id','DESC')->paginate(20);
        return view('backend.category.pet-animal.index',compact('allAds','from','to'));
    }


    public function create()
    {
        return view('backend.category.pet-animal.create');
    }


    public function store(Request $request)
    {
        foreach($request->file('image') as $image){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path().'/assets/BackEnd/images/product/',$image_name);
            $product_images[]=$image_name;
        }

        PetAnimal::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'title'=>$request-> title,
            'product_name'=>$request-> product_name,
            'color'=>$request-> color,
            'type'=>$request-> type,
            'price'=>$request-> price,
            'others'=>$request-> others,
            'description'=>$request-> description,
            'price_on_call'=>$request-> price_on_call,
            'image'=>json_encode($product_images),
        ]);
        Session::flash('success','Ads Created Successfully');
        return redirect()->route('pet-animal.index');
    }


    public function show($id)
    {
        $show=PetAnimal::find($id);
        $show['image']=explode(',',str_replace(str_split('[]""'),'',$show->image));
        return view('backend.category.pet-animal.show',compact('show'));
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
        $delete = PetAnimal::find($id);
        $delete['image']=explode(',',str_replace(str_split('[]""'),'',$delete->image));
        for($i=0; $i<count($delete->image) ; $i++){
            if(!empty($delete->image[$i])){
                unlink('assets/BackEnd/images/product/'.$delete->image[$i]);
            }
        }
        $delete->delete();
        Session::flash('success','Ads Deleted Successfully');
        return redirect()->route('pet-animal.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = PetAnimal::where('title', 'like', "%$input%")
            ->orWhere('product_name', 'like', "%$input%")
            ->orWhere('color', 'like', "%$input%")
            ->orWhere('price', 'like', "%$input%")
            ->orWhere('others', 'like', "%$input%")
            ->orWhere('description', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.pet-animal.index',compact('allAds'));
    }

    public function petAnimalFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = PetAnimal::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.category.pet-animal.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = PetAnimal::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('pet-animal.index');
    }
}
