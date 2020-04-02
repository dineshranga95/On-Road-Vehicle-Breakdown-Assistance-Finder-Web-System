<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Mechanic;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Formcontroller;
class AdminController extends Controller
{
    public function register(){
        $user=User::all();        
        return view ('admin.regcus')->with ('user',$user);
    }
    
    public function register1(){
        $user=Mechanic::all();        
        return view ('admin.regmec')->with ('user',$user);
    }
    public function delete($id){
        $user=User::findOrFail($id);
        $user->delete();  
        return redirect ('/regcustomers')->with('status','Your data is deleted');
     }
     public function mecdelete($id){
        $user=Mechanic::findOrFail($id);
        $user->delete();  
        return redirect ('/regmechanics')->with('status','Your data is deleted');
     }
     public function profile(){
        $user=Admin::all();        
        return view ('admin.profile')->with ('user',$user);
    } 
    public function update(Request $request){

        $user=Admin::find(Auth::user()->id);
        if($user){
            $validate=null;
            if (Auth::user()->email===$request['email']){
                $validate=$request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'location' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255'],                                
                     'gender'=> ['sometimes','string'],
                     
                ]);
            }else{
                $request->session()->flash('success','You cannot change your email address!');
                return redirect()->intended('/profile1'); 
            }
            if($validate){
                $user->name=$request['name'];
                $user->email=$request['email'];
                $user->location=$request['location'];
                $user->gender=$request['gender'];
                $user->save();
                $request->session()->flash('success','Your details have now been updated!');
                return redirect()->intended('/profile1');
            }
           
        }else{
            return redirect()->back();
        }
    }
    public function pwd(){
        $user=Admin::all();        
        return view ('admin.password')->with ('user',$user);
    }  
    public function change(Request $request){

        $curr_password=$request->password;
        $new_password=$request->new;
        $confirm=$request->confirm;
        if(!Hash::check($curr_password,Auth::user()->password)){
            $request->session()->flash('success','The specified password does not match');
            return redirect()->back();
            }
           
            $this->validate($request, [
                
                'new' => 'required|min:8|string',
                
            ]);
            if($new_password===$confirm){
                $request->user()->fill(['password' => Hash::make($new_password)])->save();      
                    $request->session()->flash('success','Updated Successfully.');
                    return redirect()->back();  
            }else{
                $request->session()->flash('success','password confirmation does not match with each other.');
                return redirect()->back();
             
            }
            
    }
}
?>
