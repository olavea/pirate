<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create() 
    {
        return view('auth.register');
    }
    public function store() 
    {
        // validate the form
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name'  => ['required'],
            'email'      => ['required', 'email'],
            'password'   => ['required', Password::min(6), 'confirmed']
       
        ]);

        // create the user in the database 6:06
        $user = User::create($attributes);

        // log in
        Auth::login($user);

        // redirect somewhere
        return redirect('/') 
    }

}
