<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class loginController extends BaseController
{
     public function login(Request $req)
     {
      $username = $req->input('username');
      $password = $req->input('password');

// echo $username;
// echo $password;
      $checkLogin = DB::table('users')->where(['username'=>$username,'password'=>$password])->get();
      var_dump($checkLogin);
      if(count($checkLogin)  < 1)
      {
       echo "Login SuccessFull.";
      }
      else
      {
       echo "Login Faield Wrong Data Passed";
      }
     }
}

?>
