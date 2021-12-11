<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresceptionController extends Controller
{

    public function ki()
    {
    	
        return view('backend.presception.pas');
    }

    public function create()
    {
    	return view('backend.presception.create');
    }
    
}
