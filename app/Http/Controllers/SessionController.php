<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function registrar()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = new User();

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

        auth()->login($user);

        return view('welcome')
            ->with('posts', null);
    }

    public function entrar()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! auth()->attempt(request(['email', 'password']))){
            return back();
        }
        return view('welcome')
            ->with('posts', null);
    }

    public function logout(){
        auth()->logout();
        return view('welcome')
            ->with('posts', null);
    }
}
