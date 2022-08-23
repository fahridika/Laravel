<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
// Penerapan Route Model Binding
route::get('/posts/{post:slug}', [ PostController::class, 'show']);

route::get('/category/{category:slug}', function(Category $category)
{
    return view('posts',[
        'title' => "Post by Category : $category->name" ,
        'active' => 'category',
        'posts' => $category->posts->load('category','user'),
        // 'category' => $category->name
    ]);
});

route::get('/category', function()
{
    return view('categories',[
        'title' => 'Post Categories',
        'active' => 'category',
        'categories' => Category::all()
    ]);
}); 

Route::get('/authors/{author:username}', function(User $author)
{ 
    return view('posts', [
        'title'=> "Post By Author : $author->name",
        'posts'=> $author->posts->load('category','user'),
    ]);
});