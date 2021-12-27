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
     
}
