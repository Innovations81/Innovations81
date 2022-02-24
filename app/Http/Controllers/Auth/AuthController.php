<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Role;
use Hash;
use Validator;
use Browser;
use Illuminate\Support\Facades\Password;


class AuthController extends Controller
{

    protected $redirectTo;

    public function index()
    {
        //
    }

    public function adminlogin(Request $request)
    {
        if($request->method() == 'POST'){
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            $user = User::where('email', $credentials['email'])->first();

            if($user != null){
                if (Auth::attempt($credentials)) {
                    Session::flash('success', 'Login Successfully');
                    return redirect($this->redirectTo().'/dashboard');
                }else{

                    Session::flash('error', 'You have entered invalid credentials');
                    return redirect()->back()->withInput();
                }
            }else{

                Session::flash('error', 'User Not Found');
                return redirect()->back()->withInput();
            }
        }
        return view('login');
    }

    public function redirectTo()
    {

        switch(Auth::user()->role->id){
            case 1:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = '/users';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/operations/manager';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
    }

    public function adminlogout(Request $request)
    {
        Auth::logout();
        Session::flash('success', 'Logout Successfully');

        return redirect('/');
    }

    public function forgot()
    {
      return view('forgot_password');
    }

    public function sendlink(Request $request)
    {
        $credentials = request()->validate(['email' => 'required|exists:users,email']);
        Password::sendResetLink($credentials);

        return redirect()->route('admin.forgot')->with('success','Reset password link sent on your email address.');
    }

}

?>
