<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;
use Auth;
use App\User;
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


    public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($service)
    {


        //login with facebook
        $userSocial = Socialite::driver($service)->user();

        $findUser = User::Where('email', $userSocial->email)->first();

        if ($findUser) {
            Auth::login($findUser);

            return "done with old login";
        } else {
            $user = new User;

            $user->name = $userSocial->name;
            
            $user->email = $userSocial->email;

            $user->password = bcrypt(123456);
            
            $user->save();

            Auth::login($user);

            return "done with new login";

        }

    }

}

