<?php

// use App\Models\Gateway;
use App\Models\Job;
// use App\Http\Resources\BookmarkResource; // what, structured response
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

route::get('ooki', function ()
{
    // Get the data from the callingallpapers External API for Conferences
    return Http::get('https://api.callingallpapers.com/v1/cfp');
});
