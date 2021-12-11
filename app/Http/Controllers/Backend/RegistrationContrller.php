<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationContrller extends Controller
{
    public function index()
    {
        return view('backend.user.index');
    }
    public function show()
    {
        return view('backend.user.registration');
    }
}
