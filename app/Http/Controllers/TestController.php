<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){

    	 $admins=[

		'0'=>['name'=>'mahmoud',
		'email'=>'developer@gmail.com'],


		'1'=>['name'=>'ahmed',
		'email'=>'ahmed@gmail.com']

	];

		return view('test',compact('admins'));

    }
}
