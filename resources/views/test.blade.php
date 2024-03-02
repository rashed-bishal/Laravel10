<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($categories as $category)
    <ul>
        <li>{{$category->post->title}}</li>
        <li>{{$category->post->description}}</li>
        <li>{{$category->name}}</li>
        <li>{{$category->post->status}}</li>
    </ul>
    @endforeach
</body>
</html>

