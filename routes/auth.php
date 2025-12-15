<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Socialite;

route::get('/auth/redirect', function ()
{
    return Socialite::driver('github')->redirect();
});

route::get('/auth/callback', function ()
{
    $user = Socialite::driver('github')->user();

    // $user->token
});