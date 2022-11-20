<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php foreach ($blogs as $blog):?>
        <h2><a href="blogs/{{$blog->slug}}">{{$blog-> title}}</a></h2>
        <p>published at :: {{$blog->date}}</p>
        <p>{{$blog-> intro}}</p>
    <?php endforeach; ?>
</body>
</html>