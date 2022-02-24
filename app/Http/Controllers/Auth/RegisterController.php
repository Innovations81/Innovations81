<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'first_name' => ['required', 'unique:users'],
            'last_name' => ['required', 'string', 'min:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $generatedotp = rand(100000,999999);
        // $user = User::create([
        //  'username' => $data['username'],
        //  'phone_countrycode' => $data['phone_countrycode'],
        //  'otp' => $generatedotp,
        //  'password' => Hash::make($data['password']),
        // ]);
        // $arr = array('msg' => 'Something went wrong', 'status' => false);
        // if($user){
        //     $to =[$data['phone_countrycode'].''.$data['username']];
        //     $message =$message = "Dear Customer,".$generatedotp." is your one-time password (OTP).
        //     Thank you,
        //     Team Goa247.";
        //     // $sent = $this->sendsms($to,$message);
        //     $arr = array('msg' => 'OTP sent Successfully', 'status' => true);
        // }
        $arr = array('msg' => 'Created Successfully', 'status' => true);
        return Response()->json($arr);

    }
}
