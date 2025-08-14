<li @class([
    'rank-item flex items-center sm:py-4 py-2 rounded-lg',
    'rank-1 px-1' => $position == 1,
    'rank-2 px-1' => $position == 2 && $type !== 'league',
    'rank-3 px-1' => $position == 3 && $type !== 'league',
    'px-3' => $position > 3 && $type !== 'league'
])>
    @if($type !== 'league')
        <span class="rank-number font-bold mr-3">{{ $position }}</span>
    @else
        <span @class(['pr-3' => $position == 1, 'pr-5' => $position > 1])></span>
    @endif
    <div class="w-full flex flex-wrap items-center">
        <div class="sm:w-10 sm:h-10 w-8 h-8 bg-blue-800 rounded-full flex items-center justify-center mr-3 border-2 border-yellow-500">
            {{ $slot }}
        </div>
        <div class="flex-grow sm:mb-0 mb-2">
            <h4 class="font-bold">{{ $name }}</h4>
            <p class="text-xs text-gray-400">{{ $details }}</p>
        </div>
        <div class="trophy font-bold flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
            </svg>
            {{ $points }}
        </div>
    </div>
</li>
