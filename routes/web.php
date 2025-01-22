<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;




Route::get('/', function () {
    $tales = Job::all();

    dd($tales);
    // return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
           
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    
    $job = Job::find($id);
    
    return view('job', ['job' => $job]);
});

Route::get('/upload', function () {
    return view('upload');
});


