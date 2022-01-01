<?php

namespace App\Http\Controllers\Backend;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DoctorController extends Controller
{

    
   public function ta()
    {
        $doctors=Doctor::paginate(5);
        
        return view('backend.doctors.ma',compact('doctors'));
        
    }

    public function store(Request $request)
    {
        // dd($request->all());
      if($request->hasFile('image'))
        $file=$request->file('image');
        $filename=date('Ymdhms') . '.'. $file->getClientOriginalExtension();
        $file->storeAs('/image',$filename);
    
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
   // public function destroy($id)
    //{
       // $data= Doctor::findOrFail($id);
        //$data->delete();
        //return redirect('doctors')->with('success', 'Data is Successfully deleted');
        
    //}
    
    public function delete($id)
    {
    
        $doctors=Doctor::find($id);
        $doctors->delete();
        return redirect()->back();
        
    }
    public function edit($id)
    {
        $doctors=Doctor::find($id);
        //dd($data);
        return view('backend.doctors.edit', compact('doctors'));
    }
    public function update(Request $request, $id)
    {

      

      //$request->validate([
          //'name'=>'required',
          //'spacialist'=>'required',
          //'qualification'=>'required',
          //'schedule'=>'required',
          //'contact'=>'required',
          //'email'=>'required',
          //'room'=>'required',
        
          //]);

  
        $image=$request->file('image');
       
        if ($image!= null)
        {
            $new_name=rand() . '.'. $image->getClientOriginalExtension();
           $image= $image->move(public_path('image'), $new_name);
            $form_doctors=array(
           'name' => $request->name,
           'spacialist'=>$request->spacialist,
           'qualification'=>$request->qualification,
           'schedule'=>$request->schedule,
           'contact'=>$request->contact,
           'email'=>$request->email,
           'room'=>$request->room,
           'image'=>$new_name

           );
           
           
              Doctor::whereId($id)->update($doctors);
             
              return redirect()->route('doctors.ma');
           
        }
      
          
       
           $doctors=array(
           'name' => $request->name,
           'spacialist'=>$request->spacialist,
           'qualification'=>$request->qualification,
           'schedule'=>$request->schedule,
           'contact'=>$request->contact,
           'email'=>$request->email,
           'room'=>$request->room,

           );
          

              Doctor::whereId($id)->update($doctors);
             
              return redirect()->route('doctors.ma');
    }
    
    public function show($id)
    {
        $doctors=Doctor::findOrFail($id);
        return view('backend.doctors.show', compact('doctors'));
    }
    public function ka ()
    {
        $doctors=Doctor::paginate(5);
        return view('backend.doctors.view', compact('doctors'));
                   
    }
    public function list()
    {
        $doctors=Doctor::paginate(5);
        return view('backend.doctors.doctorlist', compact('doctors'));
    }

    
     
}
