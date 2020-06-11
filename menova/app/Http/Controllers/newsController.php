<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class newsController extends Controller
{
    //
    public function test(Request $request){
    	$all_news = News::orderBy('id', 'desc')->paginate(5);
    	return view('layout.test', ['news'=>$all_news]);
    }

    public function insert()
    {
    	$add = new News;
    	$add->title = request('title');
    	$add->add_by = request('add_by');
    	$add->content = request('content');
    	$add->description = request('description');
    	$add->state = request('status');
    	$add->save();
    	return back();
    }
}
