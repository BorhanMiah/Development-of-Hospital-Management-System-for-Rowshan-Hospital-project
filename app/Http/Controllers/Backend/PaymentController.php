<?php
namespace App\Http\Controllers\Backend;
use App\Models\Payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class PaymentController extends Controller
{

    public function pay()
    {

    	$payment=Payment::paginate(5);
    	return view('backend.payment.pay',compact('payment'));
    }

     public function create()

    {
    	return view('backend.payment.create');
    }
    
    public function store(Request $request)
    {
    	$request->validate([
         
         'p_name'=> 'required',
         'date'=>'required',
         'r_price'=> 'required',
         'd_price'=>'required',
         't_price'=> 'required',
         'm_price'=> 'required'
         
    	]);
    	Payment::create([
          
         'p_name'=>$request->p_name,
         'date'=>$request->date,
         'r_price'=>$request->r_price,
         'd_price'=>$request->d_price,
         't_price'=>$request->t_price,
         'm_price'=>$request->m_price,
         'total_price'=>($request->r_price + $request->d_price + $request->t_price + $request->m_price )
    	]); 
         //$payment->save();
     return redirect()->back()->with('succes', 'Data Added Successfully.');
    	
}
public function edit($id)
    {

    	$payment= Payment::find($id);

    	return view('backend.payment.edit', compact('payment'));
    	
    }
    
    public function update( Request $request, $id)
    {
    	$request->validate([
         
         'p_name'=> 'required',
         'date'=>'required',
         'r_price'=> 'required',
         'd_price'=>'required',
         't_price'=> 'required',
         'm_price'=> 'required',
         
    	]);

    	$payment=Payment::findOrFail($id);
    	
    	$payment->p_name=$request->get('p_name');
    	$payment->date=$request->get('date');
    	$payment->r_price=$request->get('r_price');
    	$payment->d_price=$request->get('d_price');
    	$payment->t_price=$request->get('t_price');
    	$payment->m_price=$request->get('m_price');
    	$payment->total_price=($request->get('r_price') + $request->get('d_price') + $request->get('t_price') + $request->get('m_price') );
    	$payment->save();
    	return redirect()->route('payment.pay');
    }
    public function show($id)
    {
        $payment=Payment::findOrFail($id);
        return view('backend.payment.show', compact('payment'));
    }

    public function delete($id)
    {
    	$payment=Payment::find($id);
    	$payment->delete();
    	return redirect()->back();

    }
}
