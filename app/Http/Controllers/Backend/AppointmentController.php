<?php

namespace App\Http\Controllers\Backend;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AppointmentController extends Controller
{
	 
    public function appointment() 
    {
    	 
    	return view('backend.appointment.appointment');
    }


    public function store(Request $request)
    {//dd($request->all());
    	Appointment::create([
            'patient_name'=>$request->patient_name,
            'address'=>$request->address,
            'old'=>$request->old,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'doctor'=>$request->doctor,
            'diseas'=>$request->diseas
            
        ]);
        return redirect()->back();
    }
   




    public function list()
    {
        $appointments=Appointment::all();
        return view('backend.appointment.appointmentList',compact('appointments'));
            
    }
    public function request()
    {
        $appointments=Appointment::all();
        return view('backend.appointment.patientInformation',compact('appointments'));
    }
    
}
