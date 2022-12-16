<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class VerifyPassword
{

    public function handle(Request $request, Closure $next)
    {
        $email = $request->input('email');
        $senha = $request->input('senha');

        $user = User::where('email', $email)->first();
        
        if(!$user){
            return redirect('/');
        }

        if(!Hash::check($senha, $user->password)){
            return redirect('/');
        }

        return $next($request);
    }
}
