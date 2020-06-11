<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
class customerController extends Controller
{
    public function insertCustomer()
    {
    	$this->validate(request(), [
    		'username'=>'required',
    		'email' => 'required|email',
    		'phone'=> 'required|numeric',
    		'message'=>'required'
    	]);
    	$add = new Customer;
    	$add->username = request('username');
    	$add->email = request('email');
    	$add->phone = request('phone');
    	$add->message = request('message');
    	$add->save();
    	return back();

    }
}
