<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registration extends Controller
{
    //
    function regform(Request $request){
    	$var = $request->all();
    	$var['title'] = "Registration Form";
    	return view('registration.form',$var);
    }
}
