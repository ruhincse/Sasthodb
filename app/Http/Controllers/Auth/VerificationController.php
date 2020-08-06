<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo ;

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
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
