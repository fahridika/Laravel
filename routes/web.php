<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        "nama" => "Fahri Dika",
        "email" => "gunaon01@gmail.com",
        "image" => "python.png"
    ]);
});
Route::get('/blog', function () {
    $blog_posts = [
        [
        'title' =>  'Judul Post Pertama',
        'slug' => 'judul--post-pertama',
        'author' => 'Anjas W',
        'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Nisl tincidunt eget nullam non. Quis hendrer it dolor magna eget est lorem ipsum dolor sit.'
        
        ],
        [
            'title' =>  'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Fany I P',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Nisl tincidunt eget nullam non. Quis hendrer it dolor magna eget est lorem ipsum dolor sit.'
            
        ]
    
        ];

    return view('posts', [
        'title'=> 'blog',
        'posts' => $blog_posts
    ]);
});
Route::get('/', function () {
    return view('home',[
        'title' =>  'home'
    ]);
});

route::get('/posts/{slug}', function($slug){
    return view ('posts');
});