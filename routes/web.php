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
    return view('welcome');
});
 

Auth::routes();
  
Route::get('/home', 'HomeController@index')->name('home');
 
Route::group(['middleware'=>['auth','admin']], function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    }); 
    
    Route::get('/reg-role','admin\dashboardcontroller@register');
    Route::get('/edit-role/{id}','admin\dashboardcontroller@registeredit');
    Route::PUT('/update-register/{id}','admin\dashboardcontroller@registerupdate');
    Route::delete('/delete/{id}','admin\dashboardcontroller@registerdelete');

    Route::get('/regcustomers','admin\customController@register');
    Route::get('/regmechanics','admin\mechanicController@register');


    

});
Route::group(['middleware'=>['auth','mechanic']], function(){
    Route::get('/dashboard1', function () {
        return view('mechanic.dashboard1');
    }); 
    Route::get('/regrole','mechanic\dashboardcontroller@register');
    Route::get('/reg-edit','mechanic\dashboardcontroller@edit');
    Route::POST('/reg-update','mechanic\dashboardcontroller@update');
    Route::get('/request','mechanic\dashboardcontroller@request');
   

    
});
Route::group(['middleware'=>['auth','custom']], function(){
    Route::get('/dashboard2', function () {
        return view('custom.dashboard2');
    }); 
    
    Route::get('/melist','custom\CustomerController@register');
    Route::get('/markasrequested/{id}','custom\CustomerController@updaterequested');
    Route::get('/markasnotrequested/{id}','custom\CustomerController@updatenotrequested');
    Route::get('/search','custom\CustomerController@search');
});





