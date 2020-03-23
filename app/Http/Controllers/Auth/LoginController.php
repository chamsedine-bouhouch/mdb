<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendLoginResponse(Request $request)
    {   $user = User::where('email', '=', $request->email)->first();
    
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);
             
                if($user->role=="simple User"){
                 if($user->enable==true){
                    return redirect('/');
                 }
                 if($user->enable==false){
                     echo "votre compte est bloquer";
                 }
                
             }
             elseif($user->role=="technicien"&& $user->stautue=="active"){
         
                if($user->enable==true){
                return redirect('/');
             }
             if($user->enable==false){
                 echo "votre compte est bloquer";
             }
           
             elseif($user->stautue=="en attente"){
               echo "attendez le temps qu on active votre compte dans 3 jours maximum";
             }
            }
             elseif($user->role=="Admin")
             {return redirect('/');}
            
       
    }
    
}
