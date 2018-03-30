<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testimony;
use App\Service;
use App\SystemConfig;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showLandingPage()
    {
        $Testimonies=Testimony::orderBy('id', 'desc')->limit('3')->get();

        $Services=Service::orderBy('id', 'asc')->get();

        $About=SystemConfig::where('name', 'about')->first();

        return view('landing-page',['Testimonies'=>$Testimonies, 'Services'=>$Services,'About'=>$About]);
    }
}
