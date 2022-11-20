<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .bg-warning{
            background-color: yellow;
        }
    </style>
</head>
<body>
    @if(true)
       <p>Hello World</p>
    
    @endif
    @unless(false)
        <h1>This is reverse of if condition..</h1>
    @endunless
   @foreach ($blogs as $blog)
        <div class="{{$loop->even?'bg-warning':''}}">
            <h2><a href="blogs/{{$blog->slug}}">{{$blog-> title}}</a></h2>        
            <p>published at :: {{$blog->date}}</p>
            <p>{{$blog-> intro}}</p>
        </div>
    @endforeach
</body>
</html>