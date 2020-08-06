<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo  ;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check() && Auth::user()->role_id==1) {
            $this->redirectTo=route('admin.dashboard');
           }elseif(Auth::check() && Auth::user()->role_id==2){
            $this->redirectTo=route('manager.dashboard');
           }elseif(Auth::check() && Auth::user()->role_id==3){
            $this->redirectTo=route('agent.dashboard');
           }elseif(Auth::check() && Auth::user()->role_id==4){
            $this->redirectTo=route('customer.dashboard');
           }else{
            $this->redirectTo=route('donar.dashboard');

           }

        $this->middleware('auth');
    }
}
