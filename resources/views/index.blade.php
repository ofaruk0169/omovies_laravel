@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular movies</h2> 
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    <div class="mt-8">
                        <a href="#">
                            <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">{{ $movie['title'] }}</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">{{$movie['vote_average'] * 10 . '%'}}</span>
                                <span class="mx-2">|</span>
                            <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>    
                @endforeach
                
            </div>    
        </div>

        {{-- end of popular movies --}}

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing </h2> 
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-sm mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                
            </div>

            
        </div>
    </div>
@endsection