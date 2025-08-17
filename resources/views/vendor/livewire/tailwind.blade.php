@php
    if (! isset($scrollTo)) {
        $scrollTo = 'body';
    }

    $scrollIntoViewJsSnippet = ($scrollTo !== false)
        ? <<<JS
           (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView({behavior: 'smooth'})
        JS
        : '';
@endphp

@if ($paginator->hasPages())
    <div class="flex justify-center items-center mt-8 space-x-2 flex-wrap">

        {{-- Previous Page --}}
        @if ($paginator->onFirstPage())
            <span class="bg-gray-400 text-white px-3 py-2 rounded-lg opacity-50 cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </span>
        @else
            <button type="button"
                    wire:click="previousPage('{{ $paginator->getPageName() }}')"
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    class="bg-gray-600 hover:bg-gray-700 text-white px-3 py-2 rounded-lg transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
        @endif

        {{-- Pages --}}
        <div class="hidden sm:flex space-x-2">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="text-gray-400 px-2">...</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @php
                            $last = $paginator->lastPage();
                            $current = $paginator->currentPage();
                            $show = $page <= 2 || $page > $last - 2 || ($page >= $current - 1 && $page <= $current + 1);
                            $showDotsBefore = $page == 3 && $current > 4;
                            $showDotsAfter = $page == $last - 2 && $current < $last - 3;
                        @endphp

                        @if ($showDotsBefore)
                            <span class="px-2 text-gray-400">...</span>
                        @endif

                        @if ($show)
                            @if ($page == $current)
                                <span class="bg-yellow-500 text-white px-4 py-2 rounded-lg font-bold">{{ $page }}</span>
                            @else
                                <button type="button"
                                        wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                        x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                        class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition duration-300">
                                    {{ $page }}
                                </button>
                            @endif
                        @endif

                        @if ($showDotsAfter)
                            <span class="px-2 text-gray-400">...</span>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Mobile: only current page --}}
        <span class="sm:hidden bg-yellow-500 text-white px-4 py-2 rounded-lg font-bold">
            {{ $paginator->currentPage() }}
        </span>

        {{-- Next Page --}}
        @if ($paginator->hasMorePages())
            <button type="button"
                    wire:click="nextPage('{{ $paginator->getPageName() }}')"
                    x-on:click="{{ $scrollIntoViewJsSnippet }}"
                    class="bg-gray-600 hover:bg-gray-700 text-white px-3 py-2 rounded-lg transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        @else
            <span class="bg-gray-400 text-white px-3 py-2 rounded-lg opacity-50 cursor-not-allowed">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
        @endif
    </div>
@endif
