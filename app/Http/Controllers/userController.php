<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class userController extends Controller
{
    
    public function index()
    {
        return view('login');
    }

    public function login(Request $request){
        $email = $request->input('email');
        $remember = $request->input('remember');
        $token = "";

        $user = User::where('email', $email)->first();

        if($remember == "on"){
            $token = Str::random(60);
            $user->remember_token = $token;
            $user->save();
        }

        return redirect('/dashboard')->cookie(
            'remember', $token, 10080
        );
    }

    
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->input('nome');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('senha'));

        $user->save();
        return redirect('/');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }

    public function teste()
    {
        dd(User::all());

    }
}