<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function redirectPath()
    {
        $role = Auth::user()->getRoleNames()[0];
        switch ($role) {
            case 'superadmin':
                return route('admin');
                break;
            case 'finanzas':
                return route('finanzas');
                break;
            case 'moderador':
                return route('moderador');
                break;
            case 'operador':
                return route('operador');
                break;
            case 'cliente':
                return route('cliente');
                break;

            default:
                Auth::logout();
                return redirect()->route('home');
                break;
        }
    }

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
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $userProvider = Socialite::driver($provider)->user();

        $user = User::updateOrCreate(
            [   'email'             => $userProvider->email],
            [
                'nickname'          => $userProvider->name,
                'password'          => Hash::make($provider),
                'provider_id'       => $userProvider->id,
                'provider_name'     => $provider,
                'avatar'            => $userProvider->avatar,
                'avatar_original'   => $userProvider->avatar_original
            ]
        );

        Auth::login($user, true);
        return redirect()->route('home');

    }
}
