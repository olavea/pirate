<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});


Route::get('/sykkel/lengde', function ()
{
    // Here a user will choose long or short bike
    // Is it here a user will see if a bike is free to be rented?
    return view('sykkel.0-lengde');
});

Route::get('/sykkel/abonnement', function ()
{
    return view('sykkel.1-abonnement');
});

Route::get('/sykkel/bestilling', function ()
{
    return view('sykkel.2-bestilling');
});

Route::get('/sykkel/bekreft-sms', function ()
{
    return view('sykkel.3-bekreft-sms');
});

Route::get('/sykkel/betaling', function ()
{
    // return '/sykler/bestill/recXZo3GfvrzAYtpE';
    return view('sykkel.4-betaling');
});

Route::get('/sykkel/ferdig', function ()
{
    return view('sykkel.5-ferdig');
});

// delete stuff below

// Create
// Route::get('/jobs/create', function () {
    
//     // request()->validate([
//     //     'title' => ['required', 'min:3'],
//     //     'salary' => ['required'],
//     // ]);

//     return view('jobs.create');
// });

// Route::post('/jobs', function () 
// {
//     // Job::create([
//     //     'title' => request('title'),
//     //     'salary' => request('salary'),
//     // ]);

//     return redirect('/jobs');
// });

// Route::get('/thefts', function () {
//     return view('thefts.index', [
//         'jobs' => Job::all()
           
//     ]);
// });

// 0
Route::get('/thefts/create', function () 
{
    return view('thefts.create');
});

Route::post('/thefts', function () 
{
    // validate
    // authorize
    // $theft = Job::create([
    //     'title' => request('title'),
    //     'salary' => request('salary'),
    // ]);
    return redirect('/thefts/edit');
});

// Route::get('/thefts/{id}', function ($id) {
//     $jobs = Job::findOrFail($id);
    
//     return view('thefts.show', ['job' => $jobs]);
// });
// 1 photo
Route::get('/thefts/edit', function () 
{
    // $theft = Job::findOrFail($id);
    // if ($theft) {
    //     return view('thefts.edit', ['theft' => $theft]);
    // }
    return view('thefts.edit');
});

Route::patch('/thefts/edit', function ()
{
    // $theft = Job::findOrFail($id);
    // $theft->salary = request('salary');
    // $theft->save();
    return redirect('/thefts/2-find');
});

// 2
Route::get('/thefts/2-find', function () 
{
    // $theft = Job::findOrFail($id);

    // if ($theft) {
    //     return view('thefts.2-find', ['theft' => $theft]);
    // }
    return view('thefts.2-find');
});

Route::patch('/thefts/2-find', function () 
{
    // $theft = Job::findOrFail($id);
    // $theft->salary = request('salary');
    // $theft->save();
    return redirect('/thefts/3-callcops');
});

Route::get('/thefts/2-find-not', function () 
{
    // $theft = Job::findOrFail($id);

    // if ($theft) {
    //     return view('thefts.2-find-not', ['theft' => $theft]);
    // }
    return view('thefts.2-find-not');
});

Route::patch('/thefts/2-find-not', function () 
{
    // $theft = Job::findOrFail($id);
    // $theft->salary = request('salary');
    // $theft->save();
    return redirect('/thefts/3-callcops');
});

// 3 callcops
Route::get('thefts/3-callcops', function () 
{
    // $theft = Job::findOrFail($id);

    // if ($theft) {
    //     return view('thefts.3-callcops', ['theft' => $theft]);
    // }
    return view('thefts.3-callcops');
});

Route::patch('thefts/3-callcops', function () 
{
    // $theft = Job::findOrFail($id);
    // $theft->salary = request('salary');
    // $theft->save();
    return redirect('/thefts/3-whee-intro');
});

// 4 
Route::get('/thefts/3-whee-intro', function ()
{
    return view('thefts.3-whee-intro');
});


// 5


Route::get('/thefts/3-wheereport', function () 
{
    // $theft = Job::findOrFail($id);

    // if ($theft) {
    //     return view('thefts.3-wheereport', ['theft' => $theft]);

    // };
            return view('thefts.3-wheereport');
});

Route::patch('/thefts/3-wheereport', function ()
{
    // $theft = Job::findOrFail($id);
    // $theft->salary = request('salary');
    // $theft->save();
    return redirect('thefts/4-policereport');
});

Route::get('/thefts/5-add-whee', function () 
{
    return view('thefts.5-add-whee');
});




Route::get('thefts/5-bike-found', function () 
{
    // $theft = Job::findOrFail($id);

    // if ($theft) {
    //     return view('thefts.5-bike-found');
    // }
    return view('thefts.5-bike-found');
});

Route::patch('thefts/5-bike-found', function ()
{
    // $theft = Job::findOrFail($id);
    // $theft->salary = request('salary');
    // $theft->save();
    return redirect('thefts/5-thanks');
});



// 7 police-report

Route::get('/thefts/4-policereport', function () 
{
    // $theft = Job::findOrFail($id);

    // if ($theft) {
    //     return view('thefts.4-policereport', ['theft' => $theft]);

    // }
    return view('thefts.7-police-report');
});

Route::patch('thefts/4-policereport', function ()
{
    // $theft = Job::findOrFail($id);
    // $theft->salary = request('salary');
    // $theft->save();
    return redirect('thefts/5-thanks');
});

// 8 thanks
Route::get('/thefts/5-thanks', function () 
{
    // $theft = Job::findOrFail($id);

    // if ($theft) {
    //     return view('thefts.5-thanks');
    // }
    return view('thefts.8-thanks');
});


// /min-side/tyveri/ flow below

Route::get('/min-side/tyveri/opprett', function ()
{
    return view('tyveri.0-create');
});

Route::get('/min-side/tyveri/photos', function ()
{
    return view('tyveri.1-edit');
});

// Route::get('/min-side/tyveri/', function ()
// {
//     return view('');
// });


Route::get('/min-side/tyveri/call-police', function ()
{
    return view('tyveri.3-callcops');
});


// 4
Route::get('/min-side/tyveri/whee-intro', function ()
{
    return view('tyveri');
});

// Route::get('/min-side/tyveri/', function ()
// {
//     return view('');
// });

// Route::get('/min-side/tyveri/', function ()
// {
//     return view('');
// });

// Route::get('', function ()
// {
//     return view('');
// });


Route::get('/min-side/tyveri/police-report', function ()
{
    return view('tyveri.7-police-report');
});