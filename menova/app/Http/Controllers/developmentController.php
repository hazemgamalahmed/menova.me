<?php

namespace App\Http\Controllers;
use App\Development;
use Illuminate\Http\Request;

class developmentController extends Controller
{
    //
    public function insertDevelopment()
    {
    	//start validation
    	$this->validate(request(), [
    		'username' => 'required',
    		'email'    => 'required|email',
    		'phone'    => 'required|numeric',
    		'message'  => 'required'
    	]);


    	//start insert in the data
    	$developers = new Development;
    	$developers->name = request('username');
    	$developers->email = request('email');
    	$developers->phone = request('phone');
    	$developers->message = request('message');
    	$developers->save();
    	return back();

    }

    public function getClientsOfDevelopment()
    {
      $all_dev = Development::orderBy('id', 'desc')->paginate();
      return view('adminSol', ['devs'=> $all_dev]);
    }
}
