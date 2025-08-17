<div>
    <div class="card rounded-xl p-6">
        <div class="flex sm:flex-row flex-col sm:items-center justify-between mb-6">
            <h2 class="text-xl font-bold sm:mb-0 mb-4">Top Jogadores</h2>
            <select wire:model.live="leagues" class="bg-gray-800/50 border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:outline-none">
                <option value="">Todas as Ligas</option>
                @foreach(leaguesSelect() as $key => $value)
                    <option value="{{ $key }}" @checked($leagues === $key)>{{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full min-w-[600px] divide-y divide-gray-600">
                <thead class="text-gray-400 text-sm font-medium">
                    <tr>
                        <th class="px-4 py-2 text-left w-1">Rank</th>
                        <th class="px-4 py-2 text-left">Jogador</th>
                        <th class="px-4 py-2 text-left">Liga</th>
                        <th class="px-4 py-2 text-left">Troféus</th>
                        <th class="px-4 py-2 text-left">Nível</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @forelse($players as $index => $player)
                        <tr class="rounded-lg">
                            <td class="px-4 py-3">
                                <div class="rank-badge w-10 h-10 rounded-full flex items-center justify-center font-bold text-white">
                                    {{ ($players->currentPage() - 1) * $players->perPage() + ($index + 1) }}
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="font-bold text-white">{{ $player->name }}</div>
                                <div class="text-sm text-gray-400">{{ $player->tag }}</div>
                                @if($player->clanName)
                                    <div class="text-xs text-blue-400">{{ $player->clanName }}</div>
                                @else
                                    <span class="text-sm text-purple-300 py-1">Sem clã</span>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                @if($player->league)
                                    <div class="inline-flex items-center">
                                        <img src="{{ $player->leagueIcon }}" alt="ícone da liga" class="h-10 w-10 mr-1">
                                        <span class="text-sm text-purple-300">{{ translate_league($player->league) }}</span>
                                    </div>
                                @else
                                    <span class="text-sm text-purple-300 py-1">Sem classificação</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-yellow-400 font-bold">
                                <div class="flex items-center gap-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                                        <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935"/>
                                    </svg>
                                    {{ $player->trophies }}
                                </div>
                            </td>
                            <td class="px-4 py-3 text-blue-400 font-bold">{{ $player->expLevel }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-6 text-xl text-gray-400">Nenhum jogador encontrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $players->links(data: ['scrollTo' => false]) }}
    </div>
</div>
