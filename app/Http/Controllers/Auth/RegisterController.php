<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Admin;
use App\Mechanic;
use App\Requests;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
 


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:mechanic');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
   
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function showMechanicRegisterForm()
    {
        return view('auth.register', ['url' => 'mechanic']);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender'=> ['sometimes','string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'location' =>  $request['location'],
            'email' => $request['email'],
            'gender' => $request['gender'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }
    protected function createMechanic(Request $request)
    {
        $this->validator($request->all())->validate();
        $mechanic = Mechanic::create([
            'name' => $request['name'],
            'location' =>  $request['location'],
            'email' => $request['email'],
            'gender' =>  $request['gender'],
            'password' => Hash::make($request['password']),
        ]);
        $requests = new Requests();
            $requests->mechanic_id = $mechanic->id;
            $requests->mechanic_email =  $request->email;
            $requests->save();

        return redirect()->intended('login/mechanic');

    }
     protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'location' => $data['location'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->intended('login');
    }

}
