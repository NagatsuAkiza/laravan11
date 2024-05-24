<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Homepage", "posts" => Post::all()]);
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

Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($post);
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

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => 'Articles By ' . $user->name, 'posts' => $user->posts]);
});