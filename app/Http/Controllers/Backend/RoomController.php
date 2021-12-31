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

    public function edit($id)
    {

    	$room= Room::find($id);

    	return view('backend.room.edit', compact('room'));
    	
    }
    
    public function update( Request $request, $id)
    {
    	$request->validate([
    		'number'=>'required',
          'name'=>'required',
          'type'=>'required',
          'price'=>'required'

    	]);

    	$room=Room::findOrFail($id);
    	$room->number=$request->get('number');
    	$room->name=$request->get('name');
    	$room->type=$request->get('type');
    	$room->price=$request->get('price');
    	$room->save();
      return redirect()->route('room.add');
    	//return redirect('/room')->with('success', 'Data is Update');
    }

    public function delete($id)
    {
    	$room=Room::find($id);
    	$room->delete();
    	//return redirect('/room')->with('success', 'Data is delete Successfully');
      return redirect()->back();
    }

    

}
