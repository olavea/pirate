<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Cap',
                'intro' => '$50,000'  
            ],
            [
                'id' => 2,
                'title' => 'Prog',
                'intro' => '$10,000'  
            ],
            [
                'id' => 3,
                'title' => 'FirstMate',
                'intro' => '$40,000'  
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        
            [
                'id' => 1,
                'title' => 'Cap',
                'salary' => '$50,000'  
            ],
            [
                'id' => 2,
                'title' => 'Prog',
                'salary' => '$10,000'  
            ],
            [
                'id' => 3,
                'title' => 'FirstMate',
                'salary' => '$40,000'  
            ]
        
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id );
    
    return view('job', ['job' => $job]);
});

Route::get('/upload', function () {
    return view('upload');
});


