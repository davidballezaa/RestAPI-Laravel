<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Laravel</title>
    </head>
    <body class="bg-gray-100 text-gray-700">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 my-10 gap-3">
                @foreach ($posts as $post)
                    <div class="bg-white hover:bg-blue-100 border border-gray-700 p-3 flex flex-col justify-between">
                        <div>
                            <h2 class="font-bold text-lg mb-2">{{ $post['title'] }}</h2>
                            <p> {{ $post->excerpt}}...  <a href="" class="text-blue-500">See more</a></p>
                        </div>
                        <p class="text-gray-400 text-right">{{ $post->created }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="px-4">
            {{ $posts->links() }}
        </div>
    </body>
</html>
