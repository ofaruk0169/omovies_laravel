<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true}" @click.away="isOpen = false">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 text-sm rounded-full w-65 px-4 pl-8 py-1
    focus:outline-none focus:shadow-outline" placeholder="Search"
    @focus="isOpen = true"
    @keydown="isOpen = true"
    @keydown.escape.window="isOpen = false"
    @keydown.shift.tab="isOpen = false"
    >
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 31.25"><path d="M22.44 19.732l-4.586-4.586a.5.5 0 00-.707 0l-.647.647-1.362-1.363a7.526 7.526 0 10-.708.708l1.363 1.362-.646.646a.5.5 0 000 .707l4.585 4.586a1.914 1.914 0 002.708-2.707zM3 9.5A6.5 6.5 0 119.5 16 6.508 6.508 0 013 9.5zm18.732 12.232a.915.915 0 01-1.293 0L16.207 17.5l1.293-1.293 4.232 4.233a.915.915 0 010 1.292z" data-name="Search"/><text y="40" font-size="5" font-weight="bold" font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">Created by Kmg Design</text><text y="45" font-size="5" font-weight="bold"
            font-family="'Helvetica Neue', Helvetica, Arial-Unicode, Arial, Sans-serif">from the Noun Project</text></svg>
    </div>
    @if (strlen($search) > 2)
        <div 
            class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4" 
            x-show.transition.opacity="isOpen"
            
           
        >
            @if ($searchResults->count() > 0)
            <ul>
                @foreach ($searchResults as $result)
                    <li class="border-b border-gray-700">
                        <a 
                        href="{{route('movies.show', $result['id'])}}" class="block 
                        hover:bg-gray-700 px-3 py-3 flex items-center"
                        @if ($loop->last) @keydown.tab="isOpen = false"
                            
                        @endif
                        
                        >
                        @if ($result['poster_path'])
                            <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" alt="poster"
                            class="w-8">
                        @else
                            <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                        @endif
                        
                        <span class="ml-4"> {{$result['title']}} </span>
                        </a>
                    </li>
                @endforeach   
            </ul>
            @else
                <div class="px-3 py-3">No results for  "{{$search}}"</div>
            @endif
        </div>
    @endif
</div>

