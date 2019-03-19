<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data['menu'] = 'home';
    return view('welcome',$data);
    //return redirect('admin');
});
// Route::get('/course-list', function () {
//     $data['menu'] = 'course-list';
//     return view('course-list',$data);
// });

Route::get('/profile', function () {
    $data['menu'] = 'profile';
    return view('profile',$data);
});

Route::get('/product-list', function () {
    $data['menu'] = 'product-list';
    return view('product-list',$data);
});

Route::get('/edit-profile', function () {
    $data['menu'] = 'edit-profile';
    return view('edit-profile',$data);
    //return redirect('admin');
});
Route::get('/community', function () {
    $data['menu'] = 'community';
    return view('community',$data);
    //return redirect('admin');
});
Route::get('/register', function () {
    $data['menu'] = 'register';
    return view('register',$data);
    //return redirect('admin');
});

Route::get('/TestController', 'HomeController@index');
//Route::get('/ชื่อลิงค์', 'ชื่อคอนโทรลเลอร์@ชื่อฟังก์ชั่น');

