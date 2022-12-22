<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach ($blogs as $blog)
        <h2><a href="blogs/{{$blog->slug}}">{{$blog-> title}}</a></h2>
        <h4>Author :: <a href="/users/{{$blog->author->username}}" style="text-decoration: none;">{{$blog->author->name}}</a></h4>
        <h4>category :: <a href="categories/{{$blog -> category->slug}}">{{$blog -> category->name}}</a></h4>        
        <p>published at :: {{$blog->created_at->diffForHumans()}}</p>
        <p>{{$blog-> intro}}</p>
    @endforeach
    
</x-layout>