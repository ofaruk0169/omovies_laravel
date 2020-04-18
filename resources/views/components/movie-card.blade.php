<div class="mt-8 text-blue-800 ">
    <a href="{{route('movies.show', $movie['id'])}}">
        <img src="{{$movie['poster_path']}}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
    <a href="{{route('movies.show', $movie['id'])}}" class="text-lg mt-2 hover:text-red:300">{{ $movie['title'] }}</a>
        <div class="flex items-center text-red-800 text-sm mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-orange-500 w-4" viewBox="0 0 25 31.25"><path d="M16.755 14.6a.039.039 0 00-.013.043l2.233 6.699a.5.5 0 01-.77.561l-5.681-4.166a.04.04 0 00-.047 0l-5.68 4.166a.5.5 0 01-.77-.561l2.233-6.699a.039.039 0 00-.014-.044l-5.04-3.696A.5.5 0 013.5 10h6.278a.04.04 0 00.038-.027l2.206-6.62a.504.504 0 01.956 0l2.206 6.62a.04.04 0 00.038.027H21.5a.5.5 0 01.296.903z"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
        <span class="ml-1">{{$movie['vote_average'] }}</span>
            <span class="mx-2">|</span>
        <span>{{$movie['release_date']}}</span>
        </div>
        <div class="text-red-800 text-sm">
            {{$movie['genres']}}
        </div>
    </div>
</div>

{{-- @foreach ($movie['genre_ids'] as $genre)
                {{$genres->get($genre)}}@if (!$loop->last), @endif
            @endforeach --}}