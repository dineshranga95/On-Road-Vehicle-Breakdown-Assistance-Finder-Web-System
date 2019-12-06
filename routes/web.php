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
    
    Route::get('/regrole','admin\dashboardcontroller@register');
    Route::get('/role-edit/{id}','admin\dashboardcontroller@registeredit');
    Route::PUT('/register-update/{id}','admin\dashboardcontroller@registerupdate');
    Route::delete('/role-delete/{id}','admin\dashboardcontroller@registerdelete');

    Route::get('/regcustomers','admin\customController@register');
    Route::get('/regmechanics','admin\mechanicController@register');


    

});
Route::group(['middleware'=>['auth','mechanic']], function(){
    Route::get('/dashboard1', function () {
        return view('mechanic.dashboard1');
    }); 
    Route::get('/regrole', function () {
        return view('mechanic.register');
    });
     
   

});
Route::group(['middleware'=>['auth','custom']], function(){
    Route::get('/dashboard2', function () {
        return view('custom.dashboard2');
    }); 
    
    Route::get('/melist','custom\CustomerController@register');
    Route::get('/regrole-add','custom\CustomerController@add'); 


});





