<?php

use App\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.backend');
});

Route::get('/read', function () {
    $result = Post::find(1);

    return array(
        'id' => $result->id,
        'title' => $result->title,
        'description' => $result->body
    );
});

Route::get('insert', function () {
   $post = new Post;

   $post->title = 'New Title';
   $post->body = 'some post body';

   $post->save();
});
