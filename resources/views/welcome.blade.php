<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach ($blogs as $blog)
        <h2><a href="blogs/{{$blog->id}}">{{$blog-> title}}</a></h2>        
        <p>published at :: {{$blog->created_at->diffForHumans()}}</p>
        <p>{{$blog-> intro}}</p>
    @endforeach
    
</x-layout>