<?php

namespace App\Http\Controllers\Backend;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function cont()
    {
    	$contact=Contact::paginate(5);
        return view('backend.contact.cont',compact('contact'));
    }

   public function create()
    {
        return view('backend.contact.create');
    }
    public function store( Request $request)
    {
    	$request->validate([
           'contact_name'=>'required',
           'contact_email'=>'required',
           'contact_subject'=>'required',
           'contact_message'=>'required'
    	]);
    	Contact::create([
         'contact_name'=>$request->get('contact_name'),
         'contact_email'=>$request->get('contact_email'),
         'contact_subject'=>$request->get('contact_subject'),
         'contact_message'=>$request->get('contact_message')
    	]);
    	$contact->save();

    	
    	return redirect()->back();
    }
    public function delete($id)
    {
        $contact=Contact::findOrFail($id);
        $contact->delete();
        return redirect('/contact')->with('success','data delete successfully');

    }
    
}
