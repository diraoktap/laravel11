<?php

namespace App\Models;

use Illuminate\Support\Arr;

class post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'Judul-artikel-1',
                'title' => '8 Ways to Ease Stress',
                'content' => 'Managing stress is essential for maintaining your physical and emotional health. Of course, it’s normal to feel stressed out from time to time. In fact, not all stress is bad. Good stress can help inspire and motivate you, keeping you on track to reach your goals.However, the real problem arises when healthy stress turns to chronic stress.',
                'author' => 'Dira Okta Prindana',
                'role' => 'Co-Founder / CTO',
                'category' => 'Inspirational'
            ],
            [
                'id' => 2,
                'slug' => 'Judul-artikel-2',
                'title' => 'The Three Ps of Optimism by David Ogilve',
                'content' => 'Optimism plays a vital role in our professional lives, shaping our mindset and influencing our approach to challenges and opportunities. By understanding and embracing the Three Ps of Optimism – Personalization, Permanence, and Pervasiveness - we can foster resilience, enhance productivity, and cultivate a positive work environment. In this article, we’ll explore the significance of these Three Ps, provide practical tips, and examine their impact on success and wellbeing at work.',
                'author' => 'Dira Okta Prindana',
                'role' => 'Co-Founder / CTO',
                'category' => 'Inspirational'
            ],
            [
                'id' => 3,
                'slug' => 'Judul-artikel-3',
                'title' => 'The Power of Mindset by Scott Evennett',
                'content' => 'Your mindset is the cornerstone of your success, shaping how you approach challenges and navigate life`s complexities. Today, we delve into the power of mindset and introduce strategies to cultivate an unbreakable foundation. https://staitformen.com/blogs/articles/the-power-of-mindset-by-scott-evennett',
                'author' => 'Dira Okta Prindana',
                'role' => 'Co-Founder / CTO',
                'category' => 'Inspirational'
            ]
        ];
    }

    public static function find($slug): array
    {
        // FUNGSI DENGAN CARA CALL BACK 

        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
