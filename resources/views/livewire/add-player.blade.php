<div>
    <div wire:loading.remove.delay.short wire:target="search" id="searchForm" class="card rounded-xl p-8 mb-6">
        <form wire:submit.prevent class="mb-6">
            <label class="block text-sm font-medium mb-3 text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.99 1.99 0 013 12V7a4 4 0 014-4z" />
                </svg>
                ID do Jogador
            </label>
            <div class="relative">
                <input
                    wire:model="tag"
                    placeholder="#ABC123DEF"
                    class="search-input w-full px-4 py-4 rounded-lg text-white placeholder-gray-400 outline-none text-lg font-mono"
                    maxlength="10"
                >
                <div class="absolute right-4 top-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
            <p class="text-xs text-gray-400 mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Encontre seu ID no perfil do jogo
            </p>
        </form>

        <button wire:click="search()" class="w-full bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white font-bold py-4 px-6 rounded-lg transition duration-300 shadow-lg transform cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            BUSCAR JOGADOR
        </button>
    </div>

    <div id="loadingState" wire:loading.delay.short wire:target="search" class="card w-full rounded-xl p-8 text-center">
        <div class="loading-spinner w-12 h-12 rounded-full mx-auto mb-4"></div>
        <h3 class="text-xl font-bold mb-2">Buscando jogador...</h3>
        <p class="text-gray-400">Consultando Clash of Clans</p>
        <div class="mt-4 flex justify-center space-x-1">
            <div class="w-2 h-2 bg-yellow-500 rounded-full pulse-animation"></div>
            <div class="w-2 h-2 bg-yellow-500 rounded-full pulse-animation" style="animation-delay: 0.2s;"></div>
            <div class="w-2 h-2 bg-yellow-500 rounded-full pulse-animation" style="animation-delay: 0.4s;"></div>
        </div>
    </div>

    @if($player)
        <div>
            <div class="player-card rounded-xl p-8 mb-6">
                <div class="flex items-center mb-6">
                    <div class="flex-grow">
                        <h2 id="playerName" class="text-2xl font-bold mb-1">{{ $player['name'] }}</h2>
                        <p id="playerTag" class="text-yellow-400 font-mono text-lg">{{ $player['tag']  }}</p>
                        <p id="playerClan" class="text-gray-400">{{ $player['clan']['name'] }}</p>
                    </div>
                    <div class="text-right">
                        <div class="flex items-center justify-end mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy-fill text-yellow-500 mr-1" viewBox="0 0 16 16">
                                <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935"/>
                            </svg>
                            <span id="playerTrophies" class="text-xl font-bold text-yellow-500">{{ $player['trophies'] }}</span>
                        </div>
                        <p class="text-sm text-gray-400">Troféus</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <div class="stat-item p-4 rounded-lg">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-400" id="playerLevel">{{ $player['expLevel'] }}</div>
                            <div class="text-xs text-gray-400">Nível</div>
                        </div>
                    </div>
                    <div class="stat-item p-4 rounded-lg">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-400" id="playerAttackWins">{{ $player['attackWins'] }}</div>
                            <div class="text-xs text-gray-400">Vitórias</div>
                        </div>
                    </div>
                    <div class="stat-item p-4 rounded-lg">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-purple-400" id="playerDefenseWins">{{ $player['defenseWins'] }}</div>
                            <div class="text-xs text-gray-400">Defesas</div>
                        </div>
                    </div>
                    <div class="stat-item p-4 rounded-lg">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-orange-400" id="playerDonations">{{ $player['donations'] }}</div>
                            <div class="text-xs text-gray-400">Doações</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-r from-purple-900/50 to-pink-900/50 rounded-lg p-4 mb-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 flex items-center justify-center mr-4">
                            <img src="{{ $player['league']['iconUrls']['small'] }}" alt="ícone da liga">
                        </div>
                        <div>
                            <h4 class="font-bold" id="playerLeague">{{ $player['league']['name'] }}</h4>
                            <p class="text-sm text-gray-400">Liga atual</p>
                        </div>
                    </div>
                </div>
                <div class="bg-blue-900/30 rounded-lg p-4 mb-6">
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400 mr-3 mt-1 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <h4 class="font-bold text-blue-400 mb-1">Confirme seus dados</h4>
                            <p class="text-sm text-gray-300">
                                Verifique se as informações estão corretas. Seus dados serão atualizados automaticamente e você aparecerá nos rankings da plataforma.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button wire:click="save()" wire:loading.attr="disabled" wire:target="save, cancel" class="flex-1 cursor-pointer bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white font-bold py-4  rounded-lg transition duration-300 shadow-lg transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        CONFIRMAR
                    </button>
                    <button wire:click="cancel()" wire:loading.attr="disabled" wire:target="save, cancel" class="flex-1 cursor-pointer bg-gray-600 hover:bg-gray-700 text-white font-bold py-4 rounded-lg transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        CANCELAR
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
