<?php

namespace App\Http\Controllers\mechanic;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class dashboardcontroller extends Controller
{
    public function register(){
        $user=User::all();        
        return view ('mechanic.profile')->with ('user',$user);
    } 
    public function edit(){
        if(Auth::user()){
            $user=User::find(Auth::user()->id);

            if ($user){
                return view('mechanic.edit')->withUser($user); 
            }else{
                return redirect()->back();
            }
            
        }else{
            return redirect()->back();
        }
    }
    public function update(Request $request){

        $user=User::find(Auth::user()->id);
        if($user){
            $validate=null;
            if (Auth::user()->email===$request['email']){
                $validate=$request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'location' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255'],                                
                     'gender'=> ['sometimes','string'],
                ]);
            }
            if($validate){
                $user->name=$request['name'];
                $user->email=$request['email'];
                $user->location=$request['location'];
                $user->gender=$request['gender'];
                $user->save();
                $request->session()->flash('success','Your details have now been updated!');
                return redirect()->back();
            }
           
        }else{
            return redirect()->back();
        }
    }
   
     
}
