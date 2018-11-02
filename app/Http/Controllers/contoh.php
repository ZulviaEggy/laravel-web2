<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contoh extends Controller
{
    function index()
	{
		//code
		//echo 'ini controler fx index';
		  return view('index');
	}
	public function create (){
		echo 'ini controler contoh fx create';
	}
	public function tambah(){
		echo 'tambah';
	}
}
