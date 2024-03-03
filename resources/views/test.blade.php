<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @isset($user)
    <ul>
        <li>{{$user->id}}</li>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->email_verified_at}}</li>
        @foreach($user->posts as $post)
        <ul>
            <li>{{$post->title}}</li>
            <li>{{$post->description}}</li>
            <li>{{$post->published_date}}</li>
        </ul>
        @endforeach
    </ul>
    @endisset
</body>
</html>

