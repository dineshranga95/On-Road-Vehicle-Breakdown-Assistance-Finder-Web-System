<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use App\Mechanic;
use App\Requests;
use App\Feedback;
use Auth;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function feedback(){
         $user=Feedback::join('requests','requests.id','=','feedback.request_id')
         ->orderBy('updated_at', 'desc')
         ->join('mechanics','requests.mechanic_id','=','mechanics.id')
         ->where('user_id',Auth::user()->id)
         ->select('requests.user_id','requests.mechanic_id','feedback.*','mechanics.name','mechanics.avatar')->get(); 
         return view ('customer.feedback',compact('user'));
        
       
    }  
      public function message($mechanic_id){
        $user=Feedback::join('requests','feedback.request_id','=','requests.id')
        ->where('mechanic_id',$mechanic_id)
        ->where('user_id',auth::user()->id)       
         ->orderBy('updated_at', 'asc')
        ->join('mechanics','requests.mechanic_id','=','mechanics.id')
        ->select('feedback.*','mechanics.name','mechanics.avatar')->get();
         return view ('customer.message',compact('user'));
   } 
   public function messagesave(Request $request,$request_id) {
    $message=new Feedback();
    $message->request_id=$request['request_id'];
    $message->send_by_user_id=auth::user()->id;
    $message->description=$request['body'];
    $message->save();
    return redirect()->back();
} 

public function mecfeedback(){
  $user=Feedback::join('requests','requests.id','=','feedback.request_id')
  ->orderBy('updated_at', 'desc')
  ->join('users','requests.user_id','=','users.id')
  ->where('mechanic_id',Auth::user()->id)
  ->select('requests.user_id','requests.mechanic_id','feedback.*','users.name','users.avatar')->get(); 
  return view ('mechanic.feedback',compact('user'));
 

}  
public function usermessage($user_id){
  $user=Feedback::join('requests','feedback.request_id','=','requests.id')
  ->where('user_id',$user_id)
  ->where('mechanic_id',auth::user()->id) 
   ->orderBy('updated_at', 'asc')
  ->join('users','requests.user_id','=','users.id')
  ->select('feedback.*','users.name','users.avatar')->get();
   return view ('mechanic.message',compact('user'));
} 
public function usermessagesave(Request $request,$request_id) {
  $message=new Feedback();
  $message->request_id=$request['request_id'];
  $message->send_by_mechanic_id=auth::user()->id;
  $message->description=$request['body'];
  $message->save();
  return redirect()->back();
} 
}
