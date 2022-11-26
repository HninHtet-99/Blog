<x-layout>
    <x-slot name="title">
        <title>{{$blog->title}}</title>
    </x-slot>
    <h2>{{$blog->title}}</h2>
    <p>{!! $blog->body !!}</p>
    <a href="/">go back</a>
</x-layout>
