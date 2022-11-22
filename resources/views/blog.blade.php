@extends('layout')

@section('title')

<title>{{$blog->title}}</title>

@endsection

@section('content')

<h2>{{$blog->title}}</h2>
<p>{!! $blog->body !!}</p>
<a href="/">go back</a>

@endsection

