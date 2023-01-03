<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index() {
        
        return view('welcome',[
            'blogs'=> Blog::latest()->filter(request(['search']))->get(),
            'categories'=> Category::all()
        ]);
    }
    public function show(Blog $blog) {
        return view('blog',[
            'blog' =>  $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
        ]);
    }
    // protected function getBlogs(){
    //     $query = Blog::latest()->filter()->get();
    //     $query->when(request('search'),function($query,$search){
    //         $query->where('title','LIKE','%'.$search.'%')
    //         ->orWhere('body','LIKE','%'.$search.'%');
    //     });
    //     return $query->get();
    // }
}
