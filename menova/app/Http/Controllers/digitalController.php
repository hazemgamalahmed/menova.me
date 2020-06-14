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
    public function fetchdeletedData()
    {
        $all_deletes = Digital::onlyTrashed()->orderBy('id', 'desc')->paginate();
        return view('recyleDM', ['dmdels'=>$all_deletes]);
    }

    public function deleteDigital($id=null)
    {
        if($id != null){
            $del = Digital::find($id);
            $del->delete();
        }elseif(request()->has('id') and request()->has('softdelete')){
           Digital::destroy(request('id')); 
        }elseif(request()->has('restore') and request()->has('id')){
            Digital::whereIn('id', request('id'))->restore();
        }


        return back();
    }
}
