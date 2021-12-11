<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;





class RoomController extends Controller
{
    public function de()
    {
    	
    	return view('backend.room.add');
    }
    public function create()
   {
    	return view('backend.room.create');
  }

    

}
