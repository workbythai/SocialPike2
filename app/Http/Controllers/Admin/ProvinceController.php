<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProvinceController extends Controller
{
    public function GetAmphure($province_id){
        return \App\Models\Amphure::where('province_id',$province_id)->orderBy('name_th')->get();
    }
}
