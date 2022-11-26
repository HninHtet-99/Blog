<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    @foreach ($blogs as $blog)
        <h2><a href="blogs/{{$blog->slug}}">{{$blog-> title}}</a></h2>        
        <p>published at :: {{$blog->date}}</p>
        <p>{{$blog-> intro}}</p>
    @endforeach
    
</x-layout>