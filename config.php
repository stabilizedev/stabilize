<?php

use Illuminate\Support\Carbon;

return [
    'production' => false,
    'baseUrl' => 'http://stabilize.test',
    'title' => 'Forget Friction, Maximize Momentum',
    'description' => 'Stabilize is a software development agency focused on stable web application development with Laravel.',
    'image' => '/assets/images/stabilize-og-image.png',
    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'sort' => '-date',
            'author_name' => 'felipe',
            'author' => function($post) {
                return $post->authors->get($post->author_name);
            },
            'date' => '1970-01-01',
            'formatted_date' => function($post) {
                return Carbon::parse($post->date)->toFormattedDateString();
            }
        ]
    ],
    'authors' => [
        'felipe' => [
            'image' => '/assets/images/authors/felipe.png',
            'name' => 'Felipe Vega',
            'description' => 'Principal Programmer & Founder at Stabilize',
            'twitter' => 'https://twitter.com/thefelipevega'
        ]
    ]
];
