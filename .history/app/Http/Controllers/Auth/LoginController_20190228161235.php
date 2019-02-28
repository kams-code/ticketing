<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    { 
        $user = User::get()->where('name','=',$request->get($this->username()))->first();
    if(true){
        $field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
            ? $this->username()
            : 'name';

        return [
            $field => $request->get($this->username()),
            'password' => $request->password,
        ];
    }
    }

    
    /**
    * @param \App\Http\Requests\LoginRequest $request
    * @return \Illuminate\Http\RedirectResponse
    */
    public function submitLogin(LoginRequest $request)
    {
        $authenticated = app('auth')->attempt(
            $request->only('email', 'password'),
            $request->has('remember')
        );
    
        if ($authenticated)
        {
            $user = app('auth')->user()->userable;
            if (is_a($user, 'App\Client'))
            {
                // Student has logged in...
            }
            else if (is_a($user, 'App\Teacher'))
            {
                // Teacher has logged in...
            }
            
            return redirect()->intended();
        }
    }

}
