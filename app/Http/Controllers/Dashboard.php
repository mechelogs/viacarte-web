<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    function index(Request $request){
    	$var = $request->all();
    	$var['title'] = "Dashboard";
    	return view('dashboard',$var);
    }
}
