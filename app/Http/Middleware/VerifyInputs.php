<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyInputs
{
    
    public function handle(Request $request, Closure $next)
    {
        $email = $request->input('email');
        $senha = $request->input('senha');

        if(!$email || !$senha){
            return redirect('/');
        }

        return $next($request);
    }
}
