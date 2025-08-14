<section id="classificacoes" class="py-16 bg-gradient-to-b from-transparent to-indigo-900/20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-10 text-center gold-gradient">CLASSIFICAÇÕES DO BRASIL</h2>
        <div>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
                <div id="clans-tab" class="card rounded-lg py-6 px-3 sm:px-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                            </svg>
                            Ranking de Clãs
                        </h3>
                        <span class="bg-blue-700 text-xs px-2 py-1 rounded-full text-nowrap">Top 10</span>
                    </div>
                    <ul class="space-y-2">
                        @foreach($clans as $clan)
                            <x-classification-item
                                type="clans"
                                :name="$clan['name']"
                                details="Nível {{ $clan['clanLevel'] }} • {{ $clan['members'] }}/50 membros"
                                :points="$clan['clanPoints']"
                                :position="$clan['rank']"
                            >
                                <img src="{{ $clan['badgeUrls']['small'] }}" alt="badge">
                            </x-classification-item>
                        @endforeach
                    </ul>
                    <button class="mt-6 w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded transition duration-300">
                        Ver Ranking Completo
                    </button>
                </div>

                <div id="players-tab" class="card rounded-lg p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                            Ranking de Jogadores
                        </h3>
                        <span class="bg-blue-700 text-xs px-2 py-1 rounded-full text-nowrap">Top 10</span>
                    </div>

                    <ul class="space-y-2">
                        @foreach($players as $player)
                            <x-classification-item
                                type="players"
                                :name="$player['name']"
                                details="{{ $player['tag'] }} • {{ $player['clan']['name'] }}"
                                :points="$player['trophies']"
                                :position="$player['rank']"
                            >
                                <img src="{{ $player['clan']['badgeUrls']['small'] }}" alt="badge">
                            </x-classification-item>
                        @endforeach
                    </ul>
                    <button class="mt-6 w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded transition duration-300">
                        Ver Ranking Completo
                    </button>
                </div>

                <div id="leagues-tab" class="card rounded-lg p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            Ranking de Ligas
                        </h3>
                        <span class="bg-blue-700 text-xs px-2 py-1 rounded-full">Todas</span>
                    </div>
                    <ul class="space-y-2">
                        @foreach($leagues as $league)
                            <x-classification-item
                                type="league"
                                :name="$league['name']"
                                :position="$loop->iteration"
                            >
                                <img src="{{ $league['iconUrls']['small'] }}" alt="badge">
                            </x-classification-item>
                        @endforeach
                    </ul>
                    <button class="mt-6 w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded transition duration-300">
                        Ver Detalhes das Ligas
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
