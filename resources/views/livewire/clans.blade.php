<div>
    <section class="pb-20 pt-50 bg-gradient-to-b from-transparent to-indigo-900/20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 gold-gradient text-white">ENCONTRE SEU CLÃ IDEAL</h1>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">Descubra clãs ativos, competitivos e amigáveis que combinam com seu estilo de jogo!</p>
            </div>

            <div class="max-w-4xl mx-auto mb-8">
                <form wire:submit.prevent class="relative">
                    <input
                        type="text"
                        placeholder="Digite o nome do clã ou tag (#ABC123)"
                        class="search-input w-full px-6 py-4 rounded-lg text-white placeholder-gray-400 outline-none text-lg"
                        wire:model="search"
                    >
                    <button wire:click="searchClan()" class="absolute right-3 top-3 bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-4 rounded-lg cursor-pointer transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <div class="lg:col-span-1">
                    <div class="filter-card rounded-lg p-6 sticky top-24">
                        <h3 class="text-xl font-bold mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.707A1 1 0 013 7V4z" />
                            </svg>
                            Filtros
                        </h3>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Localização</label>
                            <select class="filter-select w-full px-3 py-2 rounded text-white outline-none">
                                <option value="">Todas as regiões</option>
                                <option value="BR">Brasil</option>
                                <option value="US">Estados Unidos</option>
                                <option value="UK">Reino Unido</option>
                                <option value="DE">Alemanha</option>
                                <option value="FR">França</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Tipo de Entrada</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 text-yellow-500" checked>
                                    <span class="text-sm">Aberto</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 text-yellow-500" checked>
                                    <span class="text-sm">Apenas por convite</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 text-yellow-500">
                                    <span class="text-sm">Fechado</span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Nível do Clã</label>
                            <div class="flex space-x-2">
                                <input type="number" placeholder="Min" class="filter-select w-1/2 px-3 py-2 rounded text-white outline-none">
                                <input type="number" placeholder="Max" class="filter-select w-1/2 px-3 py-2 rounded text-white outline-none">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Membros</label>
                            <div class="flex space-x-2">
                                <input type="number" placeholder="Min" class="filter-select w-1/2 px-3 py-2 rounded text-white outline-none">
                                <input type="number" placeholder="Max" class="filter-select w-1/2 px-3 py-2 rounded text-white outline-none">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Frequência de Guerra</label>
                            <select class="filter-select w-full px-3 py-2 rounded text-white outline-none">
                                <option value="">Qualquer</option>
                                <option value="always">Sempre</option>
                                <option value="often">Frequentemente</option>
                                <option value="sometimes">Às vezes</option>
                                <option value="rarely">Raramente</option>
                                <option value="never">Nunca</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Troféus Mínimos</label>
                            <input type="number" placeholder="Ex: 2000" class="filter-select w-full px-3 py-2 rounded text-white outline-none">
                        </div>

                        <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-4 rounded-lg transition duration-300">
                            Aplicar Filtros
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h2 class="text-2xl font-bold">Resultados da Busca</h2>
                            <p class="text-gray-400">Encontrados {{ count($clans) }} clãs</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <label class="text-sm">Ordenar por:</label>
                            <select wire:model.live="sort" class="filter-select px-3 py-2 rounded text-white outline-none">
                                <option value="clanPoints" @checked($sort === 'clanPoints')>Troféus</option>
                                <option value="clanLevel" @checked($sort === 'clanLevel')>Nível</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-4">
                        @empty($search)
                            <p class="text-center">
                                Nenhuma busca realizada
                            </p>
                        @endempty
                        @forelse($clans as $clan)
                            <x-card-clan
                                :name="$clan['name']"
                                :level="$clan['clanLevel']"
                                :tag="$clan['tag']"
                                :location="$clan['location']['name'] ?? 'Não localizado'"
                                :points="$clan['clanPoints']"
                                :members="$clan['members']"
                                :wins="$clan['warWins']"
                                :status="$clan['type']"
                                :min-points="$clan['requiredBuilderBaseTrophies']"
                                :icon="$clan['badgeUrls']['small']"
                                :warFrequency="$clan['warFrequency']"
                                :warLeague="$clan['warLeague']['name']"
                                :labels="$clan['labels']"
                            />
                        @empty
                            @if($search)
                                <p class="text-center">
                                    Nenhuma clã encontrado
                                </p>
                            @endif
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('styles')
    @vite(['resources/css/clans.css'])
@endpush
