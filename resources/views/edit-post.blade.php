<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit the Post</title>
</head>
<body class="font-figtree">
<main class="py-8">
    <section class="container">
        <div class="w-1/2 rounded-lg border border-gray-300">
            <div class="border-b border-b-gray-300 bg-gray-200 px-6 py-4 text-xl font-medium">
                <h1 class="text-2xl">Update Post</h1>
            </div>
            @if(Session::has('post_updated'))
                <div role="alert" class="mx-6 mt-4 bg-green-200 border border-green-300 p-4 rounded-lg">
                    {{Session::get('post_updated')}}
                </div>
            @endif
            <form method="POST" action="{{route('posts.editsubmit', $post->id)}}" class="flex flex-col gap-4 p-6" >
                @csrf
                <div class="flex flex-col gap-2">
                    <label for="title" class="text-xl">Post Title</label>
                    <input type="text" id="title" name="title" value="{{$post->title}}" class="rounded border border-gray-300 p-2 focus:outline-none">
                </div>

                <div class="flex flex-col gap-2">
                    <label for="body" class="text-xl">Post Body</label>
                    <textarea id="body" name="body" rows="3" class="rounded border border-gray-300 p-2 focus:outline-none">{{$post->body}}</textarea>
                </div>
                <button type="submit" class="cursor-pointer w-20 rounded bg-green-600 py-2 text-white">Submit</button>
            </form>
        </div>
    </section>
</main>
</body>
</html>