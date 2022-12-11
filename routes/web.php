<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;

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
        'blogs'=> Blog::all()
    ]);
});

Route::get('/blogs/{blogName}', function ($id) {
    // $blogData = Blog::find($slug);
    return view('blog',[
        'blog' =>  Blog::findOrFail($id)
    ]);
})->where('blogName','[A-z\d\-_]+');
