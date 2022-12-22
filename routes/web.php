<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
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
    return view('welcome',[
        'blogs'=> Blog::latest()->get()
    ]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {
    return view('blog',[
        'blog' =>  $blog
    ]);
})->where('blog','[A-z\d\-_]+');

Route::get('/categories/{category:slug}',function(Category $category){
    return view('welcome',[
        'blogs'=> $category->blogs
    ]);
});
Route::get('/users/{user:username}',function(User $user){
    // dd($user);
    return view('welcome',[
        'blogs'=> $user->blogs
    ]);
});