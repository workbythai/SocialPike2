<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(){
    	return view('Admin.login');
    }

    public function CheckLogin(Request $request){
    	$username = $request->input('username');
    	$password = $request->input('password');
    	$remember = $request->input('remember',false);
    	if (\Auth::guard('admin')->attempt(['username' => $username, 'password' => $password],$remember)) {
            return 1;
        }else{
        	return 0;
        }
    }

    public function logout(){
        \Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
