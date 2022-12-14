<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach ($blogs as $blog)
        <h2><a href="blogs/{{$blog->slug}}">{{$blog-> title}}</a></h2>
        <h4>category :: {{$blog -> category->name}}</h4>        
        <p>published at :: {{$blog->created_at->diffForHumans()}}</p>
        <p>{{$blog-> intro}}</p>
    @endforeach
    
</x-layout>