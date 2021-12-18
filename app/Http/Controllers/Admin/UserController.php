<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('status', 'admin')->orderBy('id','DESC')->paginate(10);
        return view('user.index',compact('users'));
    }
    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'unique:users',
            'password' => 'required|confirmed|',
        ]);
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/assets/images/user/',$document_name);
        User::create([
            'name' => $request->name,
            'image'=>$document_name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'email'=>$request->email,
            'status'=>'admin',
            'password' => bcrypt($request->password)
        ]);
        Session::flash('success','User Created Successfully');
        return redirect()->route('user.index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $edit = User::find($id);
        return view('user.edit',compact('edit'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'unique:users,email,'.$id,
            'password' => 'confirmed'
        ]);
        $update = User::find($id);
        $d = User::find($id);
        if(!empty($request->file('image'))) {
            if (!empty($d->image)) {
                unlink('assets/images/user/' . $d->image);
            }
            $document = $request->file('image');
            $document_name = rand() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path() . '/assets/images/user/', $document_name);
            $update->update([
                'name' => $request->name,
                'image'=>$document_name,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'email'=>$request->email,
            ]);
        }
        else{
            $update->update([
                'name' => $request->name,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'email'=>$request->email,
            ]);
        }
        if(!empty($request->password)){
            $update->update([
                'password' => bcrypt($request->password),
            ]);
        }
        Session::flash('success','User Updated Successfully');
        return redirect()->route('user.index');
    }
    public function destroy($id)
    {
        $delete = User::find($id);
        if(!empty($delete->image)){
            unlink('assets/images/user/'.$delete->image);
        }
        $delete->delete();
        Session::flash('success','User Deleted Successfully');
        return redirect()->route('user.index');
    }
    public function search(Request $request){
        $input = $request->input;
        $users = User::where('status', 'admin')->where('name', 'like', "%$input%")
            ->orWhere('email', 'like', "%$input%")
            ->orWhere('phone', 'like', "%$input%")
            ->orWhere('address', 'like', "%$input%")
            ->where('remember_token','=',null)
            ->orderBy('id', 'DESC')->paginate(10);
        return view('user.index',compact('users'));

    }
}
