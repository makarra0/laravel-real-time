<?php

use App\Events\PostCreated;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/create-post', function(){
    $user = User::First();

    $post = $user->posts()->create([
        'title' => Str::random(150),
        'body' => Str::random(400),
    ]);

    //event(new PostCreated($post));

    return 'OK';
});

Route::get('/', function () {
    return view('welcome');
});
