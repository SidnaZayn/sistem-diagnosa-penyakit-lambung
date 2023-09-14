<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            switch (Auth::user()->role_id) {
                case 1:
                    $this->redirectTo = 'admin';
                    return redirect()->route($this->redirectTo);
                case 2:
                    $this->redirectTo = 'home';
                    return redirect()->route($this->redirectTo);
                default:
                    $this->redirectTo = 'login';
                    return redirect()->route($this->redirectTo);
            }
            // $request->session()->regenerate();
            // return redirect('dashboard');
        } else {
            return back()->withErrors([
                'password' => 'Wrong password',
                'email' => 'Wrong email',
            ]);
        }
    }
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
}