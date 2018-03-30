<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Hire;
use App\Service;
use App\PaymentMethod as Payment;

class HireController extends Controller
{
    //

    public function showHireForm()
    {
    	$Services=Service::orderBy('id', 'asc')->get();

        $Payments=Payment::orderBy('id','asc')->get();

    	return view('hire',['Services'=>$Services, 'Payments'=>$Payments]);
    }


    public function create(Request $request)
    {

    	$formData=$request->all();

        $rule=array(
            
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'country'=>'required',
            'phone'=>'required',
            'completed_at'=>'required',
            'service'=>'required',
            'victim_info'=>'required',
            'price'=>'required',
            'payment_method'=>'required',
            'is_payment_ready'=>'required',
            );

        $message=array(
            
            'firstname'=>'This field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();

        }else{

        $hire=new Hire;

        $hire->firstname=$request->firstname;

        $hire->lastname=$request->lastname;
        
        $hire->email=$request->email;
        
        $hire->country=$request->country;
        
        $hire->phone=$request->phone;
        
        $hire->completed_at=$request->completed_at;
        
        $hire->service_id=$request->service;
        
        $hire->victim_info=$request->victim_info;
        
        $hire->price_range=$request->price;
        
        $hire->payment_method=$request->payment_method;
        
        $hire->is_payment_ready=$request->is_payment_ready;

        $hire->has_viewed=0;

        $hire->has_completed=0;

        $hire->remember_token=$request->_token;

        $hire->save();

    	return Redirect::to(route('request.create'))->with('notification', 'Hacking task successfully submitted. You will contact via email shortly.');

    	}

    	
    }
}
