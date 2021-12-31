<?php

namespace App\Http\Controllers\Backend;
use App\Models\Presception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Controllers\PDF;
use PDF;
class PresceptionController extends Controller
{

    public function ki()
    {
        $presception=Presception::paginate(5);	
        return view('backend.presception.pas',compact('presception'));
    }

    public function create()
    {
    	return view('backend.presception.create');
    }
    public function store( Request $request)
    {
    	$request-> validate([
         'd_name'=>'required',
         'date'=>'required',
         'p_name'=>'required',
         'age'=>'required',
         'gender'=>'required',
         'diseas'=>'required',
         'examination'=>'required',
         'provisional'=>'required',
         'differential'=>'required',
         'lab'=>'required',
         'advice'=>'required',
         'medicine'=>'required'
    	]);
    	Presception::create([
         
         'd_name'=>$request->d_name,
         'date'=>$request->date,
         'p_name'=>$request->p_name,
         'age'=>$request->age,
         'gender'=>$request->gender,
         'diseas'=>$request->diseas,
         'examination'=>$request->examination,
         'provisional'=>$request->provisional,
         'differential'=>$request->differential,
         'lab'=>$request->lab,
         'advice'=>$request->advice,
         'medicine'=>$request->medicine
         
    	]); 
    	return redirect()->back(); 
    }

    public function edit($id)
    {

    	$presception= Presception::find($id);

    	return view('backend.presception.edit', compact('presception'));
    	
    }
    
    public function update( Request $request, $id)
    {
    	$request-> validate([
         'd_name'=>'required',
         'date'=>'required',
         'p_name'=>'required',
         'age'=>'required',
         'gender'=>'required',
         'diseas'=>'required',
         'examination'=>'required',
         'provisional'=>'required',
         'differential'=>'required',
         'lab'=>'required',
         'advice'=>'required',
         'medicine'=>'required'
    	]);
    	$presception=Presception::findOrFail($id);
    	$presception->d_name=$request->get('d_name');
    	$presception->date=$request->get('date');
    	$presception->p_name=$request->get('p_name');
    	$presception->age=$request->get('age');
    	$presception->gender=$request->get('gender');
    	$presception->diseas=$request->get('diseas');
    	$presception->examination=$request->get('examination');
    	$presception->provisional=$request->get('provisional');
    	$presception->differential=$request->get('differential');
    	$presception->lab=$request->get('lab');
    	$presception->advice=$request->get('advice');
    	$presception->medicine=$request->get('medicine');
        $presception->save();
        return redirect()->route('presception.pas');
    	//return redirect('/presception')->with('success', 'presception Update successfully.');
    }

    public function delete($id)
    {
        $presception= Presception::find($id);
        $presception->delete();
        return redirect()->back();
        //Presception::where('id', $id)->delete();
    	
    	//return redirect('/presception')->with('success', 'Data delete Successfully');

    }
    public function show($id)
    {
        $presception=Presception::findOrFail($id);
        return view('backend.presception.show', compact('presception'));
    }
    public function printPDF(){
     
        $presception=Presception::find(6);
       
        $pdf= PDF::loadView('backend.presception.print',compact('presception')); 
        
        return $pdf->stream('medium.pdf');
       

    }
    
}
