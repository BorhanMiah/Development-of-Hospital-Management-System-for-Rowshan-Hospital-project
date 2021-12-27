<?php

namespace App\Http\Controllers\Backend;
use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;





class RoomController extends Controller
{
    public function de()
    {
    	$room=Room::all();
    	return view('backend.room.add',compact('room'));
    }
    public function create()
   {
    	return view('backend.room.create');
  }
  public function store(Request $request)
    {
        $request->validate([
            'number'=>'required',
          'name'=>'required',
          'type'=>'required',
          'price'=>'required'

        ]);
        Room::create([
         'number'=>$request->number,
         'name'=>$request->name,
         'type'=>$request->type,
         'price'=>$request->price,
        ]); 
        
        return redirect('/room')->with('success','Room is Saved');  
    }

    

}
