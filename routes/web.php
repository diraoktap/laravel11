<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Halaman Utama']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'Halaman About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Halaman Blog',
        'posts' => [
            [
                'id' => 1,
                'title' => '8 Ways to Ease Stress',
                'content' => 'Managing stress is essential for maintaining your physical and emotional health. Of course, it’s normal to feel stressed out from time to time. In fact, not all stress is bad. Good stress can help inspire and motivate you, keeping you on track to reach your goals.However, the real problem arises when healthy stress turns to chronic stress.',
                'author' => 'Dira Okta Prindana',
                'role' => 'Co-Founder / CTO',
                'category' => 'Inspirational'
            ],
            [
                'id' => 2,
                'title' => 'The Three Ps of Optimism by David Ogilve',
                'content' => 'Optimism plays a vital role in our professional lives, shaping our mindset and influencing our approach to challenges and opportunities. By understanding and embracing the Three Ps of Optimism – Personalization, Permanence, and Pervasiveness - we can foster resilience, enhance productivity, and cultivate a positive work environment. In this article, we’ll explore the significance of these Three Ps, provide practical tips, and examine their impact on success and wellbeing at work.',
                'author' => 'Dira Okta Prindana',
                'role' => 'Co-Founder / CTO',
                'category' => 'Inspirational'
            ],
            [
                'id' => 3,
                'title' => 'The Power of Mindset by Scott Evennett',
                'content' => 'Your mindset is the cornerstone of your success, shaping how you approach challenges and navigate life`s complexities. Today, we delve into the power of mindset and introduce strategies to cultivate an unbreakable foundation. https://staitformen.com/blogs/articles/the-power-of-mindset-by-scott-evennett',
                'author' => 'Dira Okta Prindana',
                'role' => 'Co-Founder / CTO',
                'category' => 'Inspirational'
            ]
        ]
    ]);
});

Route::get('/posts/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'Judul artikel 1',
            'title' => '8 Ways to Ease Stress',
            'content' => 'Managing stress is essential for maintaining your physical and emotional health. Of course, it’s normal to feel stressed out from time to time. In fact, not all stress is bad. Good stress can help inspire and motivate you, keeping you on track to reach your goals.However, the real problem arises when healthy stress turns to chronic stress.',
            'author' => 'Dira Okta Prindana',
            'role' => 'Co-Founder / CTO',
            'category' => 'Inspirational'
        ],
        [
            'id' => 2,
            'slug' => 'Judul artikel 2',
            'title' => 'The Three Ps of Optimism by David Ogilve',
            'content' => 'Optimism plays a vital role in our professional lives, shaping our mindset and influencing our approach to challenges and opportunities. By understanding and embracing the Three Ps of Optimism – Personalization, Permanence, and Pervasiveness - we can foster resilience, enhance productivity, and cultivate a positive work environment. In this article, we’ll explore the significance of these Three Ps, provide practical tips, and examine their impact on success and wellbeing at work.',
            'author' => 'Dira Okta Prindana',
            'role' => 'Co-Founder / CTO',
            'category' => 'Inspirational'
        ],
        [
            'id' => 3,
            'slug' => 'Judul artikel 3',
            'title' => 'The Power of Mindset by Scott Evennett',
            'content' => 'Your mindset is the cornerstone of your success, shaping how you approach challenges and navigate life`s complexities. Today, we delve into the power of mindset and introduce strategies to cultivate an unbreakable foundation. https://staitformen.com/blogs/articles/the-power-of-mindset-by-scott-evennett',
            'author' => 'Dira Okta Prindana',
            'role' => 'Co-Founder / CTO',
            'category' => 'Inspirational'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });

    return view('blog.post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Halaman Contact']);
});
