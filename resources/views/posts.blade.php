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
<main class="py-8">
    <section class="container">
        <div class="w-full ">
            <div class="flex px-6 py-4 text-xl font-medium">
                <h1 class="text-2xl">All Posts</h1>
            </div>
            <div>
                <table class="table-auto w-full">
                    <thead class="bg-gray-100 text-left p-4 text-xl">
                        <tr>
                            <th class="p-4 border-b border-gray-300">Post Title</th>
                            <th class="p-4 border-b border-gray-300">Post Body</th>
                            <th class="p-4 border-b border-gray-300">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td class="border-b border-gray-300 p-4">{{ $post->title }}</td>
                                <td class="border-b border-gray-300 p-4">{{ $post->body }}</td>
                                <td class="border-b border-gray-300 p-4">
                                    <a href="/posts/{{ $post->id }}" class="text-white px-4 py-2 rounded bg-green-400">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>
</body>
</html>

