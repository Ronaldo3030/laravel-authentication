<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class testeController extends Controller
{
    public function coockie(Request $request){
        $coockie = $request->cookie();
        dd($coockie);
    }
    public function destroyCookie(Request $request){
        $cookie = $request->cookie('remember');
        $user = User::where('remember_token', $cookie)->first();

        $user->remember_token = "";
        $user->save();

        return redirect('/')->withCookie(
            'remember', ""
        );
    }
}
