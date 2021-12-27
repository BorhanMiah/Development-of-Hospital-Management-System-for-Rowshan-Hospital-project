<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationContrller extends Controller
{
    public function index()
{
    $user = User:: orderBy('id','desc')->get();
    return view('backend.user.index',compact('user'));
    //$user = User::all();
    //return view('backend.user.index',compact('user'));
}
    public function show()
 {
    $user = User:: orderBy('id','desc')->get();
    return view('frontend.registration.create',compact('user'));
       // return view('frontend.registration.create');
 }
    public function store(Request $request)
    {//dd($request->all());
    	User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>$request->role,
            
            
        ]);
        //$registration->save();
    	//auth()->login($registration);
    	return redirect()->route('user.index')->with('success','You are Register now.');
    }
   
   
}
