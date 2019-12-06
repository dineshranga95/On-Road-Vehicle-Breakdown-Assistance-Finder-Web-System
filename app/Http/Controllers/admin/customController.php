<?php

namespace App\Http\Controllers\admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customController extends Controller
{
    public function register(){
        $user=User::where('usertype','customer')->get();        
        return view ('admin.register2')->with ('user',$user);
    }
    
     
     
}
