<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ScheduleController extends Controller
{
    public function ba()
    {
    	
    	return view('backend.schedule.baba');
    }
    public function create()
    {
        return view('backend.schedule.create');
    }
     
}
