<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Homepage"]);
});

Route::get('/about', function () {
    return view('about', ([
        "title" => "About",
        "nama" => "Irfana"
    ]));
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Blog",
        "posts" => Post::all()
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Post::find($slug);
    return view('post', ['title' => 'Sigle post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "youtube" => "Nagatsu Akiza",
        "facebook" => "Nagatsu Akiza"
    ]);
});

Route::get('/product', function () {
    return view('product', ["title" => "Product"]);
});