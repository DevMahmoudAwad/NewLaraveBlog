<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function getdata(){

		$data=News::all();
		//$data=[];
    	return view('test_news',compact('data'));
    }

    public function getpage($id){

    	return dd(News::findOrFail($id));
    }
}
