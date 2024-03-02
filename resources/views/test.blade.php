<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($posts as $post)
    <ul>
        <li>{{$post->title}}</li>
        <li>{{$post->description}}</li>
        <li>{{$post->category->name}}</li>
    </ul>
    @endforeach
</body>
</html>

