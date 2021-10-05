<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Mechanic;
use App\Requests;
use Auth;
use Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Formcontroller;
class CustomController extends Controller
{
    public function list(){
        
        $user=DB::table('requests')
            ->join('mechanics','requests.mechanic_id','=','mechanics.id')
           ->select('requests.*','mechanics.name','mechanics.email','mechanics.location','mechanics.servicetype','mechanics.gender','mechanics.phone')
           ->where('requests.user_id','=', Auth::user()->id)
            ->get();
        
        return view ('customer.list')->with ('user',$user); 
       
       
    }
    public function search(Request $request){
        $search=$request->get('search');
        $user=DB::table('mechanics')->where('location','like','%'.$search.'%')
        ->join('requests','mechanics.id','=','requests.mechanic_id')
        ->select('requests.*','mechanics.name','mechanics.email','mechanics.location','mechanics.servicetype','mechanics.gender','mechanics.phone')
        ->where('requests.user_id','=', Auth::user()->id) ->get();
        return view ('customer.list',['user'=>$user] );
    }
   
      public function about(){           
        return view ('customer.aboutus');
    }
    public function profile(){
        $user=User::all();        
        return view ('customer.profile')->with ('user',$user);
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
                     'avatar'=>'image|mimes:jpeg,png,jpg|max:2048',
                     
                ]);
            }else{
                $request->session()->flash('success','You cannot change your email address!');
                return redirect()->intended('/profile2'); 
            }
            if($validate){
                if($request->hasFile('avatar')){
                    //$avatar=$request->file('avatar');
                    $avataruploaded=request()->file('avatar');
                    $avatarname=$user->id.'_avatar'.time().'.'.$avataruploaded->getClientOriginalExtension();
                    $avatarpath =public_path('/uploads/avatars/');
                    $avataruploaded->move($avatarpath,$avatarname);
                   
                   
                    $user->avatar=$avatarname;
                    $user->name=$request['name'];
                    $user->email=$request['email'];
                    $user->location=$request['location'];
                    $user->gender=$request['gender'];
    
                    $user->save();
                    $request->session()->flash('success','Your details have now been updated!');
                    return redirect()->intended('/profile2');
                }
                $user->name=$request['name'];
                $user->email=$request['email'];
                $user->location=$request['location'];
                $user->gender=$request['gender'];

                $user->save();
                $request->session()->flash('success','Your details have now been updated!');
                return redirect()->intended('/profile2');
            }
           
        }else{
            return redirect()->back();
        }
    }
    public function pwd(){
        $user=User::all();        
        return view ('customer.password')->with ('user',$user);
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
    /*public function requestmechanic($id){
        $user=Mechanic::find($id);       
        return view ('customer.request')->with ('user',$user);
    }  
    public function save(Request $request){
        $requests=new Requests;
        $requests->mechanic_id=$request->input('id');
        $requests->mechanic_email=$request->input('email');
        $requests->address=$request->input('address');
        $requests->required_service=$request->input('servicetype');
        $requests->description=$request->input('description');
        $requests->user_id=Auth::user()->id;        
        $requests->save();
        
        $request->session()->flash('success','Your request success! You will receive a feedback from the mechanic.');
        
        return redirect('/melist');
    }*/
    public function requestlist(){
               
        $user=Requests::where('user_id',Auth::user()->id)
        ->where('Is_requested',1)
        ->join('mechanics','requests.mechanic_id','=','mechanics.id')
        ->select('requests.*','mechanics.name','mechanics.phone')->get(); 
        return view ('customer.requestlist',compact('user'));
     
       // return view ('customer.requestlist')->with ('user',$user);
    }   
    public function updaterequested($id) {
        
        $row=Requests::find($id);
        if(($row->user_id==NULL)||($row->user_id==Auth::user()->id) ){
            $row->user_id=Auth::user()->id; 
            $row->Is_requested=1;
            $row ->save();
            return redirect()->back();   
        }else{
            $requests=new Requests();
            $requests->mechanic_id=$row->mechanic_id;
            $requests->mechanic_email=$row->mechanic_email;
            $requests->user_id=Auth::user()->id; 
            $requests->Is_requested=1;
            $requests->save();
            return redirect()->back(); 
        }
     }
     public function updatenotrequested($id ) {
         $row=Requests::find($id);
            $row->Is_requested=0;
             $row ->save();
             return redirect()->back(); 
      } 
     
}
?>