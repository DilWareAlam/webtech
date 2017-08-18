<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function show() {
        return view('hello every one');
    }
	
	 public function showid($id) {
        return 'Laravel User ID: '.$id;
    }

}
