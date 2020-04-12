<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <a href="#" class="w-32">OMovies</a>

                </li>
                <li class="ml-16">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>

            
            </ul> 
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-65 px-4 pl-8 py-1
                    focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 31.25"><path d="M22.44 19.732l-4.586-4.586a.5.5 0 00-.707 0l-.647.647-1.362-1.363a7.526 7.526 0 10-.708.708l1.363 1.362-.646.646a.5.5 0 000 .707l4.585 4.586a1.914 1.914 0 002.708-2.707zM3 9.5A6.5 6.5 0 119.5 16 6.508 6.508 0 013 9.5zm18.732 12.232a.915.915 0 01-1.293 0L16.207 17.5l1.293-1.293 4.232 4.233a.915.915 0 010 1.292z" data-name="Search"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold"
                            font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                    </div>
                </div>
                <div class="ml-4">
                    <a href="#">
                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>

        </div>
    </nav>
    @yield('content')
</body>
</html>