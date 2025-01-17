<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array {
        return [
        
            [
                'id' => 1,
                'title' => 'Cap',
                'salary' => '$50,000'  
            ],
            [
                'id' => 2,
                'title' => 'Hallo Tilly',
                'salary' => 'på do'  
            ],
            [
                'id' => 3,
                'title' => 'FirstMate',
                'salary' => '$40,000'  
            ]
        
        ];
    }
    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id );

        if (! $job) {
            abort(418);
        }
    }
}
