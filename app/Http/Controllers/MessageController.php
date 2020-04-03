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
         ->select('requests.user_id','requests.mechanic_id','feedback.*','mechanics.name')->get(); 
         return view ('customer.feedback',compact('user'));
        
       
    }  
   /* public function message($id){
        $user=Feedback::find($id)
        ->join('requests','requests.id','=','feedback.request_id')
         ->join('mechanics','requests.mechanic_id','=','mechanics.id')
         ->select('feedback.*','mechanics.name')->get(); 
         return view ('customer.message',compact('user'));
   }  */

}
