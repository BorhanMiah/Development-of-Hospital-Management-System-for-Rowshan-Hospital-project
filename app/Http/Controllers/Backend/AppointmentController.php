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

        $request->validate([

            'patient_name'=>'required',
            'address'=>'required',
            'old'=>'required|numeric',
            'gender'=>'required',
            'phone'=>'required|digits:11',
            'email'=>'required|email',
            'doctor'=>'required',
            'diseas'=> 'required'           





        ]);
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
        $appointments=Appointment::paginate(5);
        return view('backend.appointment.appointmentList',compact('appointments'));
            
    }
    public function request()
    {
        $appointments=Appointment::paginate(5);
        return view('backend.appointment.patientInformation',compact('appointments'));
    }


    
   public function delete($id)
   {
    $appointments=Appointment::find($id);
    
    $appointments->delete();
    return redirect()->back();

   }

   public function edit($id)
    {

        $appointment=Appointment::find($id);
        return view('backend.appointment.edit', compact('appointment'));
        
    }
    public function update(Request $request, $id)
    {
        //   $request->validate([
        //     'patient_name'=>'required',
        //     'address'=>'required',
        //     'old'=>'required',
        //     'gender'=>'required',
        //     'phone'=>'required',
        //     'email'=>'required',
        //     'doctor'=>'required',
        //     'diseas'=>'required'
        // ]);
        $appointment=Appointment::find($id);
       
        $mehadi=Appointment::find($id);
        $mehadi->Update([
            'patient_name'=>$request->patient_name,
            'address'=>$request->address,
            'old'=>$request->old,
            'gender'=>$request->gender,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'doctor'=>$request->doctor,
            'diseas'=>$request->diseas
        ]);
        return redirect()->route('appointment.appointmentList');


    }


    
}
 