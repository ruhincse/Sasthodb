<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AgentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->role_id==3){

            if(Auth::user()->status==1){
                return $next($request);
            }else{

                    Auth::logout();

                    $data=['type'=>'danger','msg'=>'Your Account has been Disabled '];

                    return redirect()->route('login')->with($data);
            }

            
        }else{

               $data=['type'=>'danger','msg'=>'Invalid Email or Password '];

           return redirect()->route('login')->with($data);
        }
    }
}
