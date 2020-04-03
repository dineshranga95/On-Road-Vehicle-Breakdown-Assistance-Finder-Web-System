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
Route::get('/about', function () {
    return view('aboutus');
});

    Auth::routes();

    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/mechanic', 'Auth\LoginController@showMechanicLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/mechanic', 'Auth\RegisterController@showMechanicRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/mechanic', 'Auth\LoginController@mechanicLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/mechanic', 'Auth\RegisterController@createMechanic');

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/admin', 'admin');
    Route::view('/mechanic', 'mechanic');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/regcustomers', 'AdminController@register');
        Route::delete('/delete/{id}','AdminController@delete');
        Route::get('/regmechanics', 'AdminController@register1');
        Route::delete('/mecdelete/{id}','AdminController@mecdelete');
        Route::get('/profile1', 'AdminController@profile');
        Route::POST('/adminupdate', 'AdminController@update');
        Route::get('/changepwdadmin', 'AdminController@pwd');
        Route::POST('/pwdadmin', 'AdminController@change');
    });
      
   
    Route::group(['middleware' => 'auth:mechanic'], function () {
        Route::get('/regrole', 'MechanicController@profile');
        Route::POST('/mechanicupdate','MechanicController@update');
        Route::get('/changepwdmec', 'MechanicController@pwd');
        Route::POST('/pwdmec', 'MechanicController@change');
        Route::get('/request', 'MechanicController@request');
        Route::get('/approve/{id}','MechanicController@updateaccepted');       
       // Route::POST('/savechanges', 'MechanicController@savechanges');
    });
    Route::group(['middleware' => 'auth:web'], function () {
        Route::get('/melist','CustomController@list');
        Route::get('/search','CustomController@search');
        Route::get('/markasrequested/{{$row->id}}','CustomController@search');
        Route::get('/aboutus','CustomController@about');
        Route::get('/profile2', 'CustomController@profile');
        Route::POST('/update', 'CustomController@update');
        Route::get('/changepwd', 'CustomController@pwd');
        Route::POST('/pwd', 'CustomController@change');
      //  Route::get('/request/{id}', 'CustomController@requestmechanic');
      //  Route::POST('/saverequest', 'CustomController@save');
        Route::get('/requestlist', 'CustomController@requestlist');
        Route::get('/markasrequested/{id}','CustomController@updaterequested');
        Route::get('/markasnotrequested/{id}','CustomController@updatenotrequested');
        Route::get('/feedback', 'MessageController@feedback');
        Route::get('/message/{id}', 'MessageController@message');
    });
    
        
    
   