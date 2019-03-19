<?php

/*
  |--------------------------------------------------------------------------
  | Admin Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/admin/login', 'Admin\AuthController@login');
Route::post('/admin/CheckLogin', 'Admin\AuthController@CheckLogin');
Route::get('/admin/debug', function() {
    return view('debug');
});

Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
});


Route::group(['middleware' => 'admin_auth', 'prefix' => 'admin'], function() {
    Route::get('/', 'Admin\HomeController@index');
    Route::get('/GetAmphure/{province_id}', 'Admin\HomeController@GetAmphure');
    Route::get('/logout', 'Admin\AuthController@logout');
    Route::get('/dashboard', 'Admin\HomeController@index');

    Route::post('/upload_file', 'Admin\UploadFileController@index');



    //User
    Route::get('/change_password', 'Admin\UserController@change_password');
    Route::get('/profile', 'Admin\UserController@profile');
    Route::get('/user/ListUser', 'Admin\UserController@ListUser');
    Route::post('/user/change_password', 'Admin\UserController@change_password');
    Route::post('/user/checkedit/{id}', 'Admin\UserController@update');
    Route::post('/user/delete/{id}', 'Admin\UserController@destroy');
    Route::resource('/user', 'Admin\UserController');
    // Route::get('/user', 'Admin\UserController@index');
    Route::get('/logout', 'Admin\AuthController@logout');

    //ManageMenu
    Route::get('/ManageMenu', 'Admin\MenuController@index');
    Route::get('/menu/ListMenu', 'Admin\MenuController@ListMenu');
    Route::post('/menu', 'Admin\MenuController@store');
    Route::get('/menu/{id}', 'Admin\MenuController@edit');
    Route::post('/menu/checkedit/{id}', 'Admin\MenuController@update');
    Route::post('/menu/delete/{id}', 'Admin\MenuController@destroy');

    //SetPermission
    Route::post('/SetPermission', 'Admin\MenuController@SetPermission');
    Route::post('/GetPermission/{id}', 'Admin\MenuController@GetPermission');

    Route::get('/Install', 'Admin\InstallController@index');
    Route::get('/Install/DefaultView', 'Admin\InstallController@DefaultView');
    Route::post('/Install/GetFieldDropDown', 'Admin\InstallController@GetFieldDropDown');
    Route::post('/Install/GetField/{table}', 'Admin\InstallController@GetField');
    Route::post('/Install', 'Admin\InstallController@Install');

    Route::get('/Menu', 'Admin\MenuController@index');
    Route::get('/Menu/Lists', 'Admin\MenuController@Lists');
    Route::post('/Menu', 'Admin\MenuController@store');
    Route::get('/Menu/{id}', 'Admin\MenuController@show');
    Route::post('/Menu/{id}', 'Admin\MenuController@update');
    Route::post('/Menu/Delete/{id}', 'Admin\MenuController@destroy');

    Route::get('/AdminUser', 'Admin\AdminUserController@index');
    Route::get('/AdminUser/Lists', 'Admin\AdminUserController@Lists');
    Route::post('/AdminUser', 'Admin\AdminUserController@store');
    Route::post('/AdminUser/change_password', 'Admin\AdminUserController@change_password');
    Route::get('/AdminUser/{id}', 'Admin\AdminUserController@show');
    Route::post('/AdminUser/{id}', 'Admin\AdminUserController@update');
    Route::post('/AdminUser/Delete/{id}', 'Admin\AdminUserController@destroy');

    Route::get('/User', 'Admin\UserController@index');
    Route::get('/User/Lists', 'Admin\UserController@Lists');
    Route::post('/User', 'Admin\UserController@store');
    Route::get('/User/{id}', 'Admin\UserController@show');
    Route::post('/User/{id}', 'Admin\UserController@update');
    Route::post('/User/Delete/{id}', 'Admin\UserController@destroy');


      ##ROUTEFORINSTALL##
});

//OrakUploader
Route::any('/upload_file', 'OrakController@upload_file');
?>