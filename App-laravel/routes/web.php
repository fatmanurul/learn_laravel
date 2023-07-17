<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;

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
    return view ('home',[
        "title" => "Home"
    ]);
});

Route::get('/best-sellers', function () {
    return view ('best-sellers',[
        "title" => "best-sellers",
        "name" => "fatma nh",
        "email" => "fatmanurulhidayah347@gmail.com",
        "img" => "9.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => category::all()
    ]);
      });

Route::get('categories/{category:slug}', function(Category $category){
    return view('category',[
        'title' => $category->nama,
        'posts' => $category->posts,
        'category' => $category->nama
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts',[
        'title' => 'User Posts',
        'posts' => $author->posts,
    ]);
});
