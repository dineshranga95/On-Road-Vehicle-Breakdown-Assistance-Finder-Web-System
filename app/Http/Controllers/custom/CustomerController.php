<?php

namespace App\Http\Controllers\custom;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function register(){
        $user=User::where('usertype','mechanic')->get();        
        return view ('custom.register1')->with ('user',$user);
    }
    
     
}

