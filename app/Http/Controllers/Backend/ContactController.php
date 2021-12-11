<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function cont()
    {
    	
        return view('backend.contact.cont');
    }

   public function create()
    {
        return view('backend.contact.create');
    }
    
}
