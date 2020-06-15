<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class langController extends Controller
{
    public function index($lang)
    {
    	if(in_array($lang, ['ar', 'en'])){
    		if(session()->has('lang'))
    		{
    			session()->forget('lang');
    		}
    		session()->put('lang', $lang);

    	}else{
    		if(session()->has('lang')){
    			session()->forget('lang');
    		}
    		session()->put('lang', 'en');
    	}
    	return back();
    }
}
