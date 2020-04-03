<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Mechanic;
use App\Requests;
use App\Feedback ;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Formcontroller;
class MechanicController extends Controller
{
    public function profile(){
        $user=Mechanic::all();        
        return view ('mechanic.profile')->with ('user',$user);
    } 
    
    public function update(Request $request){

        $user=Mechanic::find(Auth::user()->id);
        if($user){
            $validate=null;
            if (Auth::user()->email===$request['email']){
                $validate=$request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'location' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255'],                                
                     'gender'=> ['sometimes','string'],
                     'phone' =>  ['required', 'max:10', 'min:'], 
                     'servicetype' => ['sometimes','string'],

                     
                ]);
            }else{
                $request->session()->flash('success','You cannot change your email address!');
                return redirect()->intended('/regrole'); 
            }
            if($validate){
                $user->name=$request['name'];
                $user->email=$request['email'];
                $user->location=$request['location'];
                $user->phone=$request['phone'];
                $user->servicetype=$request['servicetype'];
                $user->gender=$request['gender'];
                $user->save();
                $request->session()->flash('success','Your details have now been updated!');
                return redirect()->intended('/regrole');
            }
           
        }else{
            return redirect()->back();
        }
    }
                    
                    
    public function pwd(){
        $user=Mechanic::all();        
        return view ('mechanic.password')->with ('user',$user);
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
    public function request(){
        $user=Requests::where('Is_requested',1)
            ->join('users','requests.user_id','=','users.id')
            ->where('requests.mechanic_id',Auth::user()->id)
            ->select('requests.*','users.name','users.email')
            ->get();
       
        return view('mechanic.requestedusers')->with('user',$user);
    }

    public function updateaccepted($id) {
        $row=Requests::find($id);
            $row->Is_accepted=1;
            $row->Is_requested=0;
            $row ->save();
            $feedback=new Feedback();
            $feedback->request_id=$row->id;
            $feedback->description="request is accepted";
            $feedback->save();
            return redirect()->back();
     }

    
     /* public function savechanges(Request $request){
           
        $feedback=new feedback();
        $feedback->request_id=$user->id;
        $feedback->description=$request('description');
        $feedback->save;
        $request->session()->flash('success','Your details have now been updated!');
        return redirect()->intended('/requested');
      } */

   
   
}
?>