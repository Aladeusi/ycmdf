<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Service;

class ServiceController extends Controller
{
    //

    public function showCreateForm()
    {	

    	return view('admin.service.create');
    }

    public function list()
    {
    	$Services=Service::orderBy('id', 'desc')->get();

    	return view('admin.service.list', ['Services'=>$Services]);
    }

    public function delete($id)
    {

    	Service::where('id', $id)->delete();

    	return Redirect::back()->with('notification','Service succefully deleted');

    }


    public function create(Request $request)
    {

    	$formData=$request->all();

        $rule=array(
            
            'name'=>'required',

             'desc'=>"required",
            );

        $message=array(
            
            'role.desc'=>'This field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to(route('admin.service.create'))->withErrors($validator)->withInput();

        }else{

        $service=new Service;

        $service->name=$request->name;

        $service->desc=$request->desc;

        $service->remember_token=$request->_token;

        $service->save();

    	return Redirect::to(route('admin.service.list'))->with('notification', 'Service created successfully');

    	}

    	
    }

}
