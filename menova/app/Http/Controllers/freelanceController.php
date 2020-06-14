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
            'file' => 'required|mimes:jpg,pdf,docx,txt,jpeg,png,psd',
            'technologies' => 'required',
            'about'   => 'required',
            'demo'  => 'required|url',
            'project' => 'required'




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
    	$freeLance->technologies = implode(',', request('technologies'));
        $freeLance->about = request('about');
        $freeLance->demo = request('demo');
        $freeLance->project_name = request('project');
        $freeLance->save();
        return back();
    }

    public function fetchAllFree()
    {
        $all_free = Freelance::orderBy('id', 'desc')->paginate();
        return view('adminfree', ['frees'=> $all_free]);
    }
    public function fetchdelfree()
    {
        $del_free = Freelance::onlyTrashed()->orderBy('id', 'desc')->paginate();
        return view('recyesFree', ['delFrees' => $del_free]);
    }
     public function deleteFreeLance($id = null){
        if($id != null){
            $del = Freelance::find($id);
            $del->delete();
        }elseif(request()->has('id') and request()->has('softdelete')){
            Freelance::destroy(request('id'));
        }elseif(request()->has('id') and request()->has('restore')){
            Freelance::whereIn('id', request('id'))->restore();
        }

        return back();
     }
}
