<div class="clan-card rounded-lg p-6">
    <div class="flex flex-col sm:flex-row md:items-center justify-between">
        <div class="flex sm:flex-row flex-col items-center text-center sm:text-start mb-4 md:mb-0">
            <div class="w-16 h-16 flex items-center justify-center sm:mr-4">
                <img src="{{ $icon }}" alt="logo clã">
            </div>
            <div>
                <div class="flex sm:flex-row flex-col-reverse items-center mb-2 gap-y-2 mt-2 sm:mt-0">
                    <h3 class="text-xl font-bold sm:mr-3">{{ $name }}</h3>
                    <span class="level-badge text-xs px-2 py-1 rounded-full text-white font-bold">Nível {{ $level }}</span>
                </div>
                <p class="text-gray-400 text-sm mb-2">{{ $tag }} • {{ $location }}</p>
                <div class="flex items-center space-x-4 text-sm">
                    <span class="trophy font-bold flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                        </svg>
                        {{ $points }}
                    </span>
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                        </svg>
                        {{ $members }}/50
                    </span>
                    <span class="war-badge text-xs px-2 py-1 rounded-full text-white font-bold">
                        {{ $wins }} vitórias
                    </span>
                </div>
            </div>
        </div>
        <div class="flex sm:flex-col sm:items-end items-center justify-between space-y-2">
            <div>
                <span class="badge-open text-xs px-3 py-1 rounded-full text-white font-bold">{{ translate_clan_type($status) }}</span>
                <p class="text-xs text-gray-400 mt-2">Troféus mín: {{ $minPoints }}</p>
            </div>
            <div class="flex items-center gap-2">
                @if($labels)
                    @isset($labels[0])
                        <img src="{{ $labels[0]['iconUrls']['small'] }}" alt="ícone" class="h-8">
                    @endif
                    @isset($labels[1])
                        <img src="{{ $labels[1]['iconUrls']['small'] }}" alt="ícone" class="h-8">
                    @endif
                    @isset($labels[2])
                        <img src="{{ $labels[2]['iconUrls']['small'] }}" alt="ícone" class="h-8">
                    @endif
                @endif
            </div>
        </div>
    </div>
    <div class="mt-4 pt-4 border-t border-gray-700">
        <div class="flex justify-center sm:justify-start items-center space-x-4 text-xs text-gray-400">
            <span>Guerra: {{ translate_war_frequency($warFrequency) }}</span>
            <span>Liga: {{ translate_league($warLeague) }}</span>
        </div>
    </div>
</div>
