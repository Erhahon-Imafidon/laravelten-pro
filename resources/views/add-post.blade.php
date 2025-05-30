<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Add Posts: Database CRUD operations</title>
</head>
<body>
<main class="py-8">
    <section class="container">
        <div>
            <div class="border-b border-b-gray-300 bg-gray-200 px-6 py-4 text-xl font-medium">
                <h1>Add New Post</h1>
            </div>
        <form action="">
            @csrf
            <div>
                <label for="title">Post Title</label>
                <input type="text" id="title" name="title">
            </div>

            <div>
                <label for="body">Post Body</label>
                <textarea id="body" name="body" rows="3"></textarea>
            </div>
            <button type="submit" class="cursor-pointer">Submit</button>
        </form>
        </div>
    </section>
</main>
</body>
</html>