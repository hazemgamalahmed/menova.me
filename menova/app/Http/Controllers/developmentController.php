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
    public function deleteSol($id = null){
        if($id != null){
            $del = Development::find($id);
            $del->delete();
        }elseif(request()->has('id') and request()->has('softdelete')){
            Development::destroy(request('id'));
        }elseif(request()->has('id') and request()->has('restore')){
            Development::whereIn('id', request('id'))->restore();
        }
        return back();
    }
    public function fetchAllDelsSol(){
        $dels_dev = Development::onlyTrashed()->orderBy('id', 'desc')->paginate();
        return view('recySol', ['devels' => $dels_dev]);
    }
}
