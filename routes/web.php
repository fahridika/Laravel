<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
Route::get('/blog',[PostController::class, 'index']);


Route::get('/', function () {
    return view('home',[
        'title' =>  'home'
    ]);
});

route::get('/posts/{post:slug}', [ PostController::class, 'show']);