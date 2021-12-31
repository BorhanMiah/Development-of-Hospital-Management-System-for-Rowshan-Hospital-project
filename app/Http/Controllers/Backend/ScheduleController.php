<?php

namespace App\Http\Controllers\Backend;
use App\Models\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ScheduleController extends Controller
{
    public function ba()
    {
    	$schedule=Schedule::all();
    	return view('backend.schedule.baba',compact('schedule'));
    }
    public function create()
    {
        return view('backend.schedule.create');
    }
    public function show()
    {
        $schedule=Schedule::paginate(5);
        return view('backend.schedule.show',compact('schedule'));
    }
    public function store(Request $request)
    {
    	$request->validate([
         'day'=>'required',
         'time'=> 'required',
         'd_name'=> 'required',
         'room_number'=>'required'
    	]);

        Schedule::create([
    	
         'day'=>$request->day,
         'time'=>$request->time,
         'd_name'=>$request->d_name,
         'room_number'=>$request->room_number,

    	]); 
    	
    	return redirect('/schedule')->with('success','schedule is Saved');  

    	
    }
    public function delete($id)
    {
    	$schedule=Schedule::find($id);
    	$schedule->delete();
        return redirect()->back();
    }
    public function edit($id)
    {

    	$schedule= Schedule::find($id);

    	return view('backend.schedule.edit', compact('schedule'));
    	
    }
    
    public function update( Request $request, $id)
    {
    	$request->validate([
         'day'=>'required',
         'time'=> 'required',
         'd_name'=> 'required',
         'room_number'=>'required'
    	]);

    	$schedule=Schedule::findOrFail($id);
    	$schedule->day=$request->get('day');
    	$schedule->time=$request->get('time');
    	$schedule->d_name=$request->get('d_name');
    	$schedule->room_number=$request->get('room_number');
    	$schedule->save();
        //return redirect()->route('appointment.appointmentList');
    	return redirect()->route('schedule.baba');
    }
     
}
