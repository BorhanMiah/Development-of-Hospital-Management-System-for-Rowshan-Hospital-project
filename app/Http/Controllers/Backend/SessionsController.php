<?php
namespace App\Http\Controllers\Backend;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class SessionsController extends Controller
{
    public function cr()
    {
    	return view('frontend.login.create');
    }
    public function store(Request $request)
    {
    	if(auth()->attempt(request(['email','password']))==false){
    		return back()->withErrors([
              'message'=>'The email or password is incorrect, please try again'
    		]);
    	}
    	return redirect()->to('/dashboard');
    }
    public function destroy()
    {
    	auth()->logout();
    	return redirect('/login')->with('Success','You are Logout');
    }
    
}
