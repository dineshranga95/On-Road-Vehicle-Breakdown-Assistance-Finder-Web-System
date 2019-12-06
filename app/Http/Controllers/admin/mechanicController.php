<?php

namespace App\Http\Controllers\admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mechanicController extends Controller
{
    public function register(){
        $user=User::where('usertype','mechanic')->get();        
        return view ('admin.register1')->with ('user',$user);
    }
    
     
     
}