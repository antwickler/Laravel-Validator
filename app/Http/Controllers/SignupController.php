<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;

class SignupController extends Controller
{
    public function index() {
    	return view('index');
    }

    public function signup(Request $request){
    	$rules = [ 
    		'firstName' => 'required|alpha',
    		'lastName' => 'required|alpha',
    		'screenName' => 'required|alpha',
    		'birthday' => 'required|date',
    		'gender' => 'required|alpha',
    		'email' => 'required|email',
    		'password' => 'required|alpha_dash|confirmed',
    		'password_confirmation' => 'required|alpha_dash',
    		'phone' => 'required|numeric|digits:10'
    	];

    	$messages = [
    		'required' => 'Please enter your information!',
    		'alpha' => 'Please enter information!',
    		'date' => 'Please enter your birthday!',
    		'email' => 'Please enter E-mail address!',
    		'alpha_dash' => 'Please enter information in alphabetic or numeric!',
    		'confirmed' => 'Your password does not match!',
            'digits' => 'Please specify number only 10 characters!',
		];

    	$v = Validator::make($request->all(), $rules, $messages);

    	if ( $v->passes() )
    		return view('/success');
    	else
    		return redirect('/')
				->withErrors($v->messages());		
    }
}