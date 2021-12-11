<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DiagnosticController extends Controller
{
     public function dex()
    {
    	return view('backend.diagnostic.in');
    }
    public function create()
    {
        return view('backend.diagnostic.create');
    }
    
}
