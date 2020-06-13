<?php

namespace App\Http\Controllers;
use App\Freelance;
use Illuminate\Http\Request;

class freelanceController extends Controller
{
    public function addFreeLancer()
    {
    	//validate data
    	$this->validate(request(), [
    		'username' => 'required',
    		'email' => 'required|email',
    		'phone' => 'required|numeric',
    		'major' => 'required',
    		'message' => 'required',
            'file' => 'required|mimes:jpg,pdf,docx,txt,jpeg,png'

    	]);



    	// start insert data
    	$freeLance = new Freelance;
    	$freeLance->username = request('username');
    	$freeLance->email = request('email');
        $freeLance->phone = request('phone');
    	// $freeLance->files = request('file');
        if(request()->hasfile('file')){
            $file = request()->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'. $extension;
             $file->move('uploads/posts/', $filename);
             $freeLance->files = $filename;
        }else{
            return request();
            $freeLance->files = '';
        }

    	$freez =  $freeLance->major = implode(',', request('major'));
    	$freeLance->message  = request('message');
        $freeLance->save();
        return back();
    }
}
