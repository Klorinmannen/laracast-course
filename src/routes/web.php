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
                'title' => 'Senior Developer',
                'location' => 'Remote',
                'type' => 'Full-time',
                'salary' => '$120,000 - $150,000'
            ],
            [
                'id' => 2,
                'title' => 'Junior Developer',
                'location' => 'New York, NY',
                'type' => 'Part-time',
                'salary' => '$60,000 - $80,000'
            ],
            [
                'id' => 3,
                'title' => 'Project Manager',
                'location' => 'San Francisco, CA',
                'type' => 'Contract',
                'salary' => '$90,000 - $110,000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [
            'id' => 1,
            'title' => 'Senior Developer',
            'location' => 'Remote',
            'type' => 'Full-time',
            'salary' => '$120,000 - $150,000'
        ],
        [
            'id' => 2,
            'title' => 'Junior Developer',
            'location' => 'New York, NY',
            'type' => 'Part-time',
            'salary' => '$60,000 - $80,000'
        ],
        [
            'id' => 3,
            'title' => 'Project Manager',
            'location' => 'San Francisco, CA',
            'type' => 'Contract',
            'salary' => '$90,000 - $110,000'
        ]
    ];


    $job = Arr::first($jobs, fn($job) => $job['id'] == $id, 'Job not found!');

    #dd($job);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
