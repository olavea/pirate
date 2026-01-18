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

Route::get('/thefts/4-policereport', function () 
{
    // $theft = Job::findOrFail($id);

    // if ($theft) {
    //     return view('thefts.4-policereport', ['theft' => $theft]);

    // }
    return view('thefts.4-policereport');
});

Route::patch('thefts/4-policereport', function ()
{
    // $theft = Job::findOrFail($id);
    // $theft->salary = request('salary');
    // $theft->save();
    return redirect('thefts/5-thanks');
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

Route::get('/thefts/5-thanks', function () 
{
    // $theft = Job::findOrFail($id);

    // if ($theft) {
    //     return view('thefts.5-thanks');
    // }
    return view('thefts.5-thanks');
});


// jobs below

// Route::get('/jobs', function () {
//     // $jobs = Job::with('employer')->simplePaginate(3);

//     return view('jobs.index', [
//         'jobs' => Job::all()
           
//     ]);
// });



// Store
// Route::post('/jobs', function () {
    
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required'],
//     ]);
//     Job::create([
//         'title' => request('title'),
//         'salary' => request('salary'),
//     ]);
//     return redirect('/jobs');
// });
// Ahoy Show below, in ep (16) 01:56
// Route::get('/jobs/{id}', function ($id) {
//     $jobs = Job::findOrFail($id);
    
//     return view('jobs.show', ['job' => $jobs]);
// });

// Route::get('/upload', function () {
//     return view('upload');
// });


// route::get('/jobs/{id}/edit', function ($id) 
// {
//     $jobs = Job::findOrFail($id);

//     return view('jobs.edit', ['job' => $jobs]);
// });

// Route::patch('/jobs/{id}', function ($id) 
// {
//     $jobs = Job::findOrFail($id);

//     $jobs->title = request('title');
//     $jobs->save();
//     return redirect('/jobs/'.$jobs->id);
// });

// Route::get('/', function () {
    //     return view('home', [
    //         'jobs' => [
    //             [
    //                 'id' => 1,
    //                 'title' => 'Barbeque Party at Berglunds', 
    //                 'salary' => 'The party started with chilled prosecco in tall glasses and hard cheese with little spicy biscuits. With the patriarch of Berglunds I discussed our mutual satisfation with the personal attention our young ladies get from strong teachers at private and creative schools. The grilled meat and grilled vegetables were delicious. And a powerful red wine. But the triumphant high point: dessert! Crusty Blackberry Pie with icecreams and vanilla sauce.'
    //             ],
    //             [
    //                 'id' => 2,
    //                 'title' => 'The Dev Pirate Princess 🏴‍☠️👸 Redesigns Our POW! Website!',
    //                 'salary' => '«I am bored» Said the Pirate Princess. «You wanna help me redesign our POW! website?» Captain Ola Said. «YES!» Said the little Pirate. «Let us play around with background colors in Tailwind.» Captain Ola Said. She looked for "bg" in Visual Studio Code. Then guessed the english spelling of "orange" and "yellow", which where the colors she most frequently chose.'
    //             ],
    //             [
    //                 'id' => 3,
    //                 'title' => 'Whisper of the Heart, Studio Ghibli',
    //                 'salary' => 'Finding a Chonky Cat riding a train, Shizuku follows it to discover an antique shop run by Shirō. Shizuku is ecstatic about finding "a place where stories begin".'
    //             ],
    //             [
    //                 'id' => 4,
    //                 'title' => 'My favourite Robin Hood movie',
    //                 'salary' => 'I remember watching that Robin Hood movie in the cinema with my dad. MAN I loved that movie. I drew Robin Hood EVERY day for months in day care. And I drew that hypnist snake Hiss also. I drew Hiss with his spiralling eyes. I wish I had some of those drawings today to show The Pirate Princess.'
    //             ],
    //             [
    //                 'id' => 5,
    //                 'title' => 'Hacking around the christmas tree it is a hacky holidaaay',
    //                 'salary' => 'The Pirate Princess and Captain Ola Vea drags the christmas tree home on the skateboard. 🛹 Singing christmas songs slightly too loud and slightly off key. 🔑🎵'
    //             ],
    //             [
    //                 'id' => 6,
    //                 'title' => 'We all 3 went to the Structured Content Conference and got ideas 💡',
    //                 'salary' => 'Lillian (7 🏴‍☠️👸) is drawing a tall tale about two girls who find a hidden key to a dangerous door that leads to a forest with a monster filled labyrith.'
    //             ]   
    //         ]
               
    //     ]);
    // });
    

// // edit 02:00
// Route::get('/jobs/{id}/edit', function ($id) {
//     $jobs = [
//         [
//             'id' => 1,
//             'title' => 'Barbeque Party at Berglunds', 
//             'salary' => 'The party started with chilled prosecco in tall glasses and hard cheese with little spicy biscuits. With the patriarch of Berglunds I discussed our mutual satisfation with the personal attention our young ladies get from strong teachers at private and creative schools. The grilled meat and grilled vegetables were delicious. And a powerful red wine. But the triumphant high point: dessert! Crusty Blackberry Pie with icecreams and vanilla sauce.'
//         ],
//         [
//             'id' => 2,
//             'title' => 'The Dev Pirate Princess 🏴‍☠️👸 Redesigns Our POW! Website!',
//             'salary' => '«I am bored» Said the Pirate Princess. «You wanna help me redesign our POW! website?» Captain Ola Said. «YES!» Said the little Pirate. «Let us play around with background colors in Tailwind.» Captain Ola Said. She looked for "bg" in Visual Studio Code. Then guessed the english spelling of "orange" and "yellow", which where the colors she most frequently chose.'
//         ],
//         [
//             'id' => 3,
//             'title' => 'Whisper of the Heart, Studio Ghibli',
//             'salary' => 'Finding a Chonky Cat riding a train, Shizuku follows it to discover an antique shop run by Shirō. Shizuku is ecstatic about finding "a place where stories begin".'
//         ],
//         [
//             'id' => 4,
//             'title' => 'My favourite Robin Hood movie',
//             'salary' => 'I remember watching that Robin Hood movie in the cinema with my dad. MAN I loved that movie. I drew Robin Hood EVERY day for months in day care. And I drew that hypnist snake Hiss also. I drew Hiss with his spiralling eyes. I wish I had some of those drawings today to show The Pirate Princess.'
//         ],
//         [
//             'id' => 5,
//             'title' => 'Hacking around the christmas tree it is a hacky holidaaay',
//             'salary' => 'The Pirate Princess and Captain Ola Vea drags the christmas tree home on the skateboard. 🛹 Singing christmas songs slightly too loud and slightly off key. 🔑🎵'
//         ],
//         [
//             'id' => 6,
//             'title' => 'We all 3 went to the Structured Content Conference and got ideas 💡',
//             'salary' => 'Lillian (7 🏴‍☠️👸) is drawing a tall tale about two girls who find a hidden key to a dangerous door that leads to a forest with a monster filled labyrith.'
//         ]   
//     ];
//     $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    
//     return view('jobs.edit', ['job' => $job]);
// });

// update
// Route::patch('/jobs/{id}', function ($id) {
//     $jobs = [
//         [
//             'id' => 1,
//             'title' => 'Barbeque Party at Berglunds', 
//             'salary' => 'The party started with chilled prosecco in tall glasses and hard cheese with little spicy biscuits. With the patriarch of Berglunds I discussed our mutual satisfation with the personal attention our young ladies get from strong teachers at private and creative schools. The grilled meat and grilled vegetables were delicious. And a powerful red wine. But the triumphant high point: dessert! Crusty Blackberry Pie with icecreams and vanilla sauce.'
//         ],
//         [
//             'id' => 2,
//             'title' => 'The Dev Pirate Princess 🏴‍☠️👸 Redesigns Our POW! Website!',
//             'salary' => '«I am bored» Said the Pirate Princess. «You wanna help me redesign our POW! website?» Captain Ola Said. «YES!» Said the little Pirate. «Let us play around with background colors in Tailwind.» Captain Ola Said. She looked for "bg" in Visual Studio Code. Then guessed the english spelling of "orange" and "yellow", which where the colors she most frequently chose.'
//         ],
//         [
//             'id' => 3,
//             'title' => 'Whisper of the Heart, Studio Ghibli',
//             'salary' => 'Finding a Chonky Cat riding a train, Shizuku follows it to discover an antique shop run by Shirō. Shizuku is ecstatic about finding "a place where stories begin".'
//         ],
//         [
//             'id' => 4,
//             'title' => 'My favourite Robin Hood movie',
//             'salary' => 'I remember watching that Robin Hood movie in the cinema with my dad. MAN I loved that movie. I drew Robin Hood EVERY day for months in day care. And I drew that hypnist snake Hiss also. I drew Hiss with his spiralling eyes. I wish I had some of those drawings today to show The Pirate Princess.'
//         ],
//         [
//             'id' => 5,
//             'title' => 'Hacking around the christmas tree it is a hacky holidaaay',
//             'salary' => 'The Pirate Princess and Captain Ola Vea drags the christmas tree home on the skateboard. 🛹 Singing christmas songs slightly too loud and slightly off key. 🔑🎵'
//         ],
//         [
//             'id' => 6,
//             'title' => 'We all 3 went to the Structured Content Conference and got ideas 💡',
//             'salary' => 'Lillian (7 🏴‍☠️👸) is drawing a tall tale about two girls who find a hidden key to a dangerous door that leads to a forest with a monster filled labyrith.'
//         ]   
//     ];
//     $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

//     // validate request 7:
        
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required'],
//     ]);
//     // authorize (on hold ...)
    
    
//     // update the job
//     // and persist
//     $job = Job::findOrFail($id);
//     $job->update([    
//         'title' => request('title'),
//         'salary' => request('salary'),
//     ]);



//     //  . $job->id)
//     // redirect to job page  . $job['id'] og  , '/1'
//     return redirect('/jobs/' . $job['id']);


   
// });

// destroy
// Route::delete('/jobs/{id}', function ($id) {
//     $jobs = [
//         [
//             'id' => 1,
//             'title' => 'Barbeque Party at Berglunds', 
//             'salary' => 'The party started with chilled prosecco in tall glasses and hard cheese with little spicy biscuits. With the patriarch of Berglunds I discussed our mutual satisfation with the personal attention our young ladies get from strong teachers at private and creative schools. The grilled meat and grilled vegetables were delicious. And a powerful red wine. But the triumphant high point: dessert! Crusty Blackberry Pie with icecreams and vanilla sauce.'
//         ],
//         [
//             'id' => 2,
//             'title' => 'The Dev Pirate Princess 🏴‍☠️👸 Redesigns Our POW! Website!',
//             'salary' => '«I am bored» Said the Pirate Princess. «You wanna help me redesign our POW! website?» Captain Ola Said. «YES!» Said the little Pirate. «Let us play around with background colors in Tailwind.» Captain Ola Said. She looked for "bg" in Visual Studio Code. Then guessed the english spelling of "orange" and "yellow", which where the colors she most frequently chose.'
//         ],
//         [
//             'id' => 3,
//             'title' => 'Whisper of the Heart, Studio Ghibli',
//             'salary' => 'Finding a Chonky Cat riding a train, Shizuku follows it to discover an antique shop run by Shirō. Shizuku is ecstatic about finding "a place where stories begin".'
//         ],
//         [
//             'id' => 4,
//             'title' => 'My favourite Robin Hood movie',
//             'salary' => 'I remember watching that Robin Hood movie in the cinema with my dad. MAN I loved that movie. I drew Robin Hood EVERY day for months in day care. And I drew that hypnist snake Hiss also. I drew Hiss with his spiralling eyes. I wish I had some of those drawings today to show The Pirate Princess.'
//         ],
//         [
//             'id' => 5,
//             'title' => 'Hacking around the christmas tree it is a hacky holidaaay',
//             'salary' => 'The Pirate Princess and Captain Ola Vea drags the christmas tree home on the skateboard. 🛹 Singing christmas songs slightly too loud and slightly off key. 🔑🎵'
//         ],
//         [
//             'id' => 6,
//             'title' => 'We all 3 went to the Structured Content Conference and got ideas 💡',
//             'salary' => 'Lillian (7 🏴‍☠️👸) is drawing a tall tale about two girls who find a hidden key to a dangerous door that leads to a forest with a monster filled labyrith.'
//         ]   
//     ];

// });

// Destroy
// Route::delete('/jobs/{id}', function ($id) {
//     // authorize (On hold...)

//     // delete the job
//     // $job = Job::findOrFail($id);
//     // $job->delete();
//     Job::findOrFail($id)->delete();

//     // redirect to jobs page 

//     return redirect('/jobs');
// });    