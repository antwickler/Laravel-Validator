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
    		'password_confirmation' => 'required|alpha_dash'
    	];

    	$messages = [
    		'firstName' => 'Please enter your first name!',
    		'lastName' => 'Please enter your last name!',
    		'screenName' => 'Please enter your screen name!',
    		'birthday' => 'Please enter your birthday!',
    		'gender' => 'Please enter your gender!',
    		'email' => 'Please enter E-mail address!',
    		'password' => 'Please enter your password!',
    		'password_confirmation' => 'Please confirm your password!',
		];

    	$v = Validator::make($request->all(), $rules);

    	if ( $v->passes() )
    		return view('/success');
    	else
    		return redirect('/')
				->withErrors($v->messages());		
    }
}