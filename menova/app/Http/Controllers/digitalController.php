<?php

namespace App\Http\Controllers;
use App\Digital;
use Illuminate\Http\Request;

class digitalController extends Controller
{
    public function insertDigitalClients()
    {
    	//filteration the data

    	$this->validate(request(), [
    		'username'=>'required',
    		'email'  => 'required|email',
    		'phone'   => 'required|numeric',
    		'message' => 'required'
    	]);

    	//insert in the database
    	$digital = new Digital;
    	$digital->name = request('username');
    	$digital->email = request('email');
    	$digital->phone = request('phone');
    	$digital->message = request('message');
    	$digital->save();
    	return back();
    }
    public function fetchAllDigits()
    {
    	$all_degets = Digital::orderBy('id', 'desc')->paginate();
    	return view('adminDig', ['degets' => $all_degets]);
    }
}
