<div>
    <section class="pb-20 pt-40 bg-gradient-to-b from-transparent to-indigo-900/20">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 gold-gradient text-white">ENCONTRE SEU CLÃ IDEAL</h1>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">Descubra clãs ativos, competitivos e amigáveis que combinam com seu estilo de jogo!</p>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <div class="lg:col-span-1">
                    <form wire:submit.prevent="searchClan()" class="filter-card rounded-lg p-6 sticky top-24">
                        <h3 class="text-xl font-bold mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.707A1 1 0 013 7V4z" />
                            </svg>
                            Filtros
                        </h3>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Clã</label>
                            <input wire:model="search" placeholder="Nome ou tag (#ABC123)" @class(['filter-select w-full px-3 py-2 rounded text-white outline-none', '!border-red-500' => $errors->has('search')])>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Nível do Clã</label>
                            <input wire:model="minClanLevel" type="number" placeholder="mínimo" @class(['filter-select w-full px-3 py-2 rounded text-white outline-none', '!border-red-500' => $errors->has('minClanLevel')])>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Membros</label>
                            <div class="flex items-baseline space-x-2">
                                <div class="w-1/2">
                                    <input wire:model="minMembers" type="number" placeholder="Mínimo" @class(['filter-select w-full px-3 py-2 rounded text-white outline-none', '!border-red-500' => $errors->has('minMembers')])>
                                </div>
                                <div class="w-1/2">
                                    <input wire:model="maxMembers" type="number" placeholder="Máximo" @class(['filter-select w-full px-3 py-2 rounded text-white outline-none', '!border-red-500' => $errors->has('maxMembers')])>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Frequência de Guerra</label>
                            <select wire:model="warFrequency" @class(['filter-select w-full px-3 py-2 rounded text-white outline-none', '!border-red-500' => $errors->has('warFrequency')])>
                                <option value="">Qualquer</option>
                                <option value="always" @checked($warFrequency === 'always')>Sempre</option>
                                <option value="oncePerWeek" @checked($warFrequency === 'oncePerWeek')>Uma vez por semana</option>
                                <option value="moreThanOncePerWeek" @checked($warFrequency === 'moreThanOncePerWeek')>Mais de uma vez por semana</option>
                                <option value="lessThanOncePerWeek" @checked($warFrequency === 'lessThanOncePerWeek')>Menos de uma vez por semana</option>
                                <option value="never" @checked($warFrequency === 'never')>Nunca</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Troféus Mínimos</label>
                            <input wire:model="minClanPoints" type="number" placeholder="Ex: 2000" @class(['filter-select w-full px-3 py-2 rounded text-white outline-none', '!border-red-500' => $errors->has('minClanPoints')])>
                        </div>

                        <button type="submit" class="w-full cursor-pointer bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-4 rounded-lg transition duration-300">
                            Buscar
                        </button>
                    </form>
                </div>

                <div class="lg:col-span-3">
                    <div class="sm:flex justify-between items-center mb-6">
                        <div>
                            <h2 class="text-2xl font-bold">Resultados da Busca</h2>
                            <p class="text-gray-400">Encontrados {{ count($clans['items'] ?? []) }} clãs</p>
                        </div>
                        <div class="flex items-center space-x-4 sm:mt-0 mt-4">
                            <label class="text-sm">Ordenar por:</label>
                            <select wire:model.live="sort" class="filter-select px-3 py-2 rounded text-white outline-none">
                                <option value="clanPoints" @checked($sort === 'clanPoints')>Troféus</option>
                                <option value="clanLevel" @checked($sort === 'clanLevel')>Nível</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-4">
                        @empty($search)
                            <p class="sm:text-center">
                                Nenhuma busca realizada
                            </p>
                        @endempty
                        @forelse($clans['items'] ?? [] as $clan)
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
                    <div class="flex justify-end mt-8">
                        <div class="flex space-x-2">
                            @isset($clans['paging']['cursors']['before'])
                                @php $before = $clans['paging']['cursors']['before']; @endphp
                                <button wire:click="previous('{{$before}}')" class="cursor-pointer px-3 py-2 bg-gray-700 hover:bg-gray-600 rounded transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @endisset
                            @isset($clans['paging']['cursors']['after'])
                                @php $after = $clans['paging']['cursors']['after']; @endphp
                                <button wire:click="next('{{$after}}')" class="cursor-pointer px-3 py-2 bg-gray-700 hover:bg-gray-600 rounded transition duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @endisset
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <x-toast-errors/>
</div>

@push('styles')
    @vite(['resources/css/clans.css'])
@endpush
