@extends('layout')

@section('title')
<title>All Blogs</title>
@endsection

@section('content')

@foreach ($blogs as $blog)
    <h2><a href="blogs/{{$blog->slug}}">{{$blog-> title}}</a></h2>        
    <p>published at :: {{$blog->date}}</p>
    <p>{{$blog-> intro}}</p>
@endforeach

@endsection
