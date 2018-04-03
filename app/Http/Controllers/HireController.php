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
            
            
            'email'=>'required',
            'hrequest'=>'required',
            'payment_method'=>'required',
            );

        $message=array(
            
            'email'=>'This field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();

        }else{

        $hire=new Hire;

      
        
        $hire->email=$request->email;
        
        
        
        $hire->service_id=$request->service;

         $hire->hrequest=$request->hrequest;
        
        $hire->payment_method=$request->payment_method;
        

        $hire->has_viewed=0;

        $hire->has_completed=0;

        $hire->remember_token=$request->_token;

        $hire->save();

    	return Redirect::to(route('request.create'))->with('notification', 'Hacking task successfully submitted. You will contact via email shortly.');

    	}

    	
    }
}

