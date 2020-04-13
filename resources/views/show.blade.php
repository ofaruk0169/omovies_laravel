@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="postermovie" class="w-64 md:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title']}}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
                    <span class="ml-1">{{$movie['vote_average'] * 10 . '%'}}</span>
                    <span class="mx-2">|</span>
                    <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            {{$genre['name']}}@if (!$loop->last), @endif
                        @endforeach
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $movie['overview']}}
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                                <div class="mr-8">
                                    <div>{{ $crew['name']}}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job']}}</div>
                                </div>
                            @endif
                            
                        @endforeach
                        
                    </div>
                    
                </div>

                @if (count($movie['videos']['results']) > 0)
                    <div class="mt-12">
                        <a href="https://youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 
                            py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            <span>Play Trailer</span>
                        </a>
                    </div>
                @endif


            </div>
        </div>
    </div> 
    {{-- end movie info --}}

    

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300/'.$cast['profile_path']}}" alt="actor1" 
                                class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray:300">{{$cast['name']}}</a>
                            
                                <div class="text-gray-400 text-sm">
                                    {{$cast['character']}}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
     
            </div>
        </div>
    </div>

    {{-- end of actor info  --}}

    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 9)
                        <div class="mt-8">
                            <a href="#">
                                <img src={{'https://image.tmdb.org/t/p/w500/'.$image['file_path']}} alt="image1" 
                                class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                    @endif 
                @endforeach                               
                </div>
            </div>             
        </div>
    </div>
</div>
@endsection