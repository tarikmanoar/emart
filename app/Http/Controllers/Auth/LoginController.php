<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin');
            }elseif (auth()->user()->role == 'teacher') {
                return "teacher";
            } elseif (auth()->user()->role == 'parent') {
                return "parent";
            } elseif (auth()->user()->role == 'student') {
                return "student";
            } elseif (auth()->user()->role == 'accountant') {
                return "accountant";
            } elseif (auth()->user()->role == 'librarian') {
                return "librarian";
            } else {
                return redirect()->route('setting.show',auth()->user()->id);
            }
        } else {
            toast('Password and Email Wrong!','error');
            return redirect()->route('login');
        }
    }
}
