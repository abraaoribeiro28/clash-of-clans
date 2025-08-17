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
        @if($slot != '')
            <div class="sm:w-10 sm:h-10 w-8 h-8 flex items-center justify-center mr-3">
                {{ $slot }}
            </div>
        @endif
        <div class="flex-grow sm:mb-0 mb-2">
            <h4 class="font-bold">{{ $name }}</h4>
            @if($type !== 'league')
                <p class="text-xs text-gray-400">{{ $details }}</p>
            @endif
        </div>
        @if($type !== 'league')
            <div class="trophy font-bold sm:w-fit w-full flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy-fill mr-1" viewBox="0 0 16 16">
                    <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935"/>
                </svg>
                {{ $points }}
            </div>
        @endif
    </div>
</li>
