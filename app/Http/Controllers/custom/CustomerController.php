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
    public function updaterequested($id) {
       $row=User::find($id);
       $row->Is_requested=1;
       $row ->save();
       return redirect()->back(); 
    }
    public function updatenotrequested($id) {
        $row=User::find($id);
        $row->Is_requested=0;
        $row ->save();
        return redirect()->back(); 
     }
     
}

