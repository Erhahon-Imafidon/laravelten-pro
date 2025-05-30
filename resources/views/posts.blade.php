<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Posts</title>
</head>
<body class="font-figtree">
<main>
    <h1 class="text-4xl font-bold mb-2">All Posts</h1>
    <div class="flex flex-col gap-4">
        @foreach($posts as $post)
            <div class="">
                <h2 class="font-bold text-2xl">{{$post->title}}</h2>
                <p>{{$post->body}}</p>
            </div>
        @endforeach
    </div>
</main>
</body>
</html>

