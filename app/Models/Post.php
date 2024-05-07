<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "slug" => "artikel-1",
                "title" => "Artikel 1",
                "author" => "Irfana",
                "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis esse inventore odio
                laudantium excepturi,
                corrupti temporibus assumenda cum aperiam dignissimos eos dolor sunt animi nostrum quia quas voluptatem accusamus
                deserunt?"
            ],
            [
                "id" => 2,
                "slug" => "artikel-2",
                "title" => "Artikel 2",
                "author" => "Irfana",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, architecto eos! Dicta
                veritatis assumenda officiis dolore nobis cumque eveniet in architecto non vel animi beatae nesciunt accusantium,
                recusandae at aliquid!"
            ]
        ];
    }
    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}