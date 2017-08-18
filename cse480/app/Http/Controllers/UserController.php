<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show() {
        return ('welcome');
    }
	
	public function showid($id) {
        return 'Laravel User ID: '.$id;
    }
}
