<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['menu'] = 'test_controller';
        return view('test_controller',$data);
    }
}
