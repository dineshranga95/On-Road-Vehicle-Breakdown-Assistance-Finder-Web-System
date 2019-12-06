<?php

namespace App\Http\Controllers\admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function register(){
        $user=User::all();        
        return view ('admin.register')->with ('user',$user);
    }
    public function registeredit(Request $request,$id){
       $user=User::findOrFail($id);
       return view ('admin.registeredit')->with('user',$user);
    }
    public function registerupdate(Request $request,$id){
        $user=User::find($id);
        $user->name=$request->input('username');
        $user->usertype=$request->input('usertype');
        $user->update();  
        return redirect ('/regrole')->with('status','Your data is updated');
     }

        public function registerdelete($id){
        $user=User::findOrFail($id);
        $user->delete();  
        return redirect ('/regrole')->with('status','Your data is deleted');
     }
     
     
}
