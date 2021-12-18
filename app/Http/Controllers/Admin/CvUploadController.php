<?php

namespace App\Http\Controllers\Admin;

use App\CvUpload;
use File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CvUploadController extends Controller
{
    public function index()
    {
        $from = null;
        $to = null;
        $allAds = CvUpload::orderBy('id','DESC')->paginate(10);
        return view('backend.cv-upload.index',compact('allAds','from','to'));
    }


    public function create()
    {
        return view('backend.cv-upload.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf',
        ]);
        $document = $request->file('file');
        if(!empty($document)){
            $document_name = rand().'.'.$document->getClientOriginalExtension();
            $document->move(public_path().'/assets/BackEnd/images/cv/',$document_name);
        }
        else{
            $document_name = $request->file;
        }

        CvUpload::create([
            'user_id'=>$request-> user_id,
            'date'=>$request-> date,
            'first_name'=>$request-> first_name,
            'last_name'=>$request-> last_name,
            'email'=>$request-> email,
            'phone'=>$request-> phone,
            'expected_salary'=>$request-> expected_salary,
            'file'=>$document_name,
        ]);
        Session::flash('success','Cv Bank Created Successfully');
        return redirect()->route('cv-upload.index');
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
        $delete = CvUpload::find($id);
            if(!empty($delete->file)){
                unlink('assets/BackEnd/images/cv/'.$delete->file);
            }
            $delete->delete();

        Session::flash('success','Cv Deleted Successfully');
        return redirect()->route('cv-upload.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $allAds = CvUpload::where('first_name', 'like', "%$input%")
            ->orWhere('last_name', 'like', "%$input%")
            ->orWhere('email', 'like', "%$input%")
            ->orWhere('phone', 'like', "%$input%")
            ->orWhere('expected_salary', 'like', "%$input%")
            ->orderBy('id', 'DESC')->paginate(20);
        return view('backend.cv-upload.index',compact('allAds'));
    }

    public function cvBankFind(Request $request){
        $from = $request->date_from;
        $to = $request->date_to;
        $allAds = CvUpload::whereDate('date', '>=', $from)->whereDate('date', '<=', $to)->orderBy('id', 'DESC')->paginate(20);
        return view('backend.cv-upload.index',compact('allAds','from','to'));
    }

    public function approve($id){
        $approve = CvUpload::find($id);
        $approve->update([
            'approve' => 1,
        ]);

        Session::flash('success', 'Approved Successfully');
        return redirect()->route('cv-upload.index');
    }
}
