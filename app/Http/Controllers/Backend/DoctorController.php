<?php

namespace App\Http\Controllers\Backend;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DoctorController extends Controller
{



   public function doc()
    {

           return view('backend.doctor');
    }
    

   
   public function ta()
    {
        $doctors=Doctor::all();
        
        return view('backend.doctors.ma',compact('doctors'));
        
    }

    public function store(Request $request)
    {
        // dd($request->all());
      if($request->hasFile('image'))
        $file=$request->file('image');
        $filename=date('Ymdhms') . '.'. $file->getClientOriginalExtension();
        $file->storeAs('/uploads',$filename);
    
            Doctor::create([


                'name' => $request->name,
                'spacialist'=>$request->spacialist,
                'qualification'=>$request->qualification,
                'schedule'=>$request->schedule,
                'contact'=>$request->contact,
                'email'=>$request->email,
                'room'=>$request->room,
                'image'=>$filename



            ]);
      
        return redirect()->back()->with('succes', 'Data Added Successfully.');

    }
    public function create()
    {
        return view('backend.doctors.create');
    }
    public function ka()
    {
        $doctors=Doctor::all();
        return view('backend.doctors.view', compact('doctors'));
        
    }
     
}
