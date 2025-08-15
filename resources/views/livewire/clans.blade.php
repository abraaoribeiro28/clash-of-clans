<div>
    <section class="pb-20 pt-50 bg-gradient-to-b from-transparent to-indigo-900/20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 gold-gradient text-white">ENCONTRE SEU CLÃ IDEAL</h1>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">Descubra clãs ativos, competitivos e amigáveis que combinam com seu estilo de jogo!</p>
            </div>

            <div class="max-w-4xl mx-auto mb-8">
                <div class="relative">
                    <input
                        type="text"
                        placeholder="Digite o nome do clã ou tag (#ABC123)"
                        class="search-input w-full px-6 py-4 rounded-lg text-white placeholder-gray-400 outline-none text-lg"
                        id="searchInput"
                    >
                    <button class="absolute right-2 top-2 bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-6 rounded-lg transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Filters and Results -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                <!-- Filters Sidebar -->
                <div class="lg:col-span-1">
                    <div class="filter-card rounded-lg p-6 sticky top-24">
                        <h3 class="text-xl font-bold mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.707A1 1 0 013 7V4z" />
                            </svg>
                            Filtros
                        </h3>

                        <!-- Location Filter -->
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

                        <!-- Type Filter -->
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

                        <!-- Level Filter -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Nível do Clã</label>
                            <div class="flex space-x-2">
                                <input type="number" placeholder="Min" class="filter-select w-1/2 px-3 py-2 rounded text-white outline-none">
                                <input type="number" placeholder="Max" class="filter-select w-1/2 px-3 py-2 rounded text-white outline-none">
                            </div>
                        </div>

                        <!-- Members Filter -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Membros</label>
                            <div class="flex space-x-2">
                                <input type="number" placeholder="Min" class="filter-select w-1/2 px-3 py-2 rounded text-white outline-none">
                                <input type="number" placeholder="Max" class="filter-select w-1/2 px-3 py-2 rounded text-white outline-none">
                            </div>
                        </div>

                        <!-- War Frequency -->
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

                        <!-- Trophy Range -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium mb-2">Troféus Mínimos</label>
                            <input type="number" placeholder="Ex: 2000" class="filter-select w-full px-3 py-2 rounded text-white outline-none">
                        </div>

                        <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-4 rounded-lg transition duration-300">
                            Aplicar Filtros
                        </button>
                    </div>
                </div>

                <!-- Results -->
                <div class="lg:col-span-3">
                    <!-- Results Header -->
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h2 class="text-2xl font-bold">Resultados da Busca</h2>
                            <p class="text-gray-400">Encontrados 247 clãs</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <label class="text-sm">Ordenar por:</label>
                            <select class="filter-select px-3 py-2 rounded text-white outline-none">
                                <option value="trophies">Troféus</option>
                                <option value="level">Nível</option>
                                <option value="members">Membros</option>
                                <option value="wars">Guerras Vencidas</option>
                            </select>
                        </div>
                    </div>

                    <!-- Clan Results -->
                    <div class="space-y-4">
                        <!-- Clan 1 -->
                        <div class="clan-card rounded-lg p-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between">
                                <div class="flex items-center mb-4 md:mb-0">
                                    <div class="w-16 h-16 bg-blue-800 rounded-full flex items-center justify-center mr-4 border-2 border-yellow-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 100 100">
                                            <path d="M50,20 L60,40 L80,45 L65,60 L70,80 L50,70 L30,80 L35,60 L20,45 L40,40 Z" fill="#F7B500"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center mb-2">
                                            <h3 class="text-xl font-bold mr-3">Guerreiros Elite</h3>
                                            <span class="level-badge text-xs px-2 py-1 rounded-full text-white font-bold">Nível 20</span>
                                        </div>
                                        <p class="text-gray-400 text-sm mb-2">#ABC123 • Brasil 🇧🇷</p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="trophy font-bold flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                45,789
                                            </span>
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                                                </svg>
                                                50/50
                                            </span>
                                            <span class="war-badge text-xs px-2 py-1 rounded-full text-white font-bold">
                                                🏆 234 vitórias
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-2">
                                    <span class="badge-open text-xs px-3 py-1 rounded-full text-white font-bold">ABERTO</span>
                                    <p class="text-xs text-gray-400">Troféus mín: 2500</p>
                                    <button class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-4 rounded transition duration-300">
                                        Ver Detalhes
                                    </button>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-700">
                                <p class="text-sm text-gray-300">"Clã competitivo focado em guerras e liga do clã. Procuramos jogadores ativos e dedicados!"</p>
                                <div class="flex items-center mt-2 space-x-4 text-xs text-gray-400">
                                    <span>⚔️ Guerra: Sempre</span>
                                    <span>🛡️ Liga: Cristal I</span>
                                    <span>📅 Ativo há 2 horas</span>
                                </div>
                            </div>
                        </div>

                        <!-- Clan 2 -->
                        <div class="clan-card rounded-lg p-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between">
                                <div class="flex items-center mb-4 md:mb-0">
                                    <div class="w-16 h-16 bg-red-800 rounded-full flex items-center justify-center mr-4 border-2 border-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 100 100">
                                            <path d="M30,30 L70,30 L70,70 L30,70 Z" fill="#F74B00"/>
                                            <path d="M40,40 L60,40 L60,60 L40,60 Z" fill="#F7B500"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center mb-2">
                                            <h3 class="text-xl font-bold mr-3">Dragões do Brasil</h3>
                                            <span class="level-badge text-xs px-2 py-1 rounded-full text-white font-bold">Nível 18</span>
                                        </div>
                                        <p class="text-gray-400 text-sm mb-2">#DEF456 • Brasil 🇧🇷</p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="trophy font-bold flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                43,210
                                            </span>
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                                                </svg>
                                                48/50
                                            </span>
                                            <span class="war-badge text-xs px-2 py-1 rounded-full text-white font-bold">
                                                🏆 189 vitórias
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-2">
                                    <span class="badge-invite text-xs px-3 py-1 rounded-full text-white font-bold">CONVITE</span>
                                    <p class="text-xs text-gray-400">Troféus mín: 2000</p>
                                    <button class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-4 rounded transition duration-300">
                                        Ver Detalhes
                                    </button>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-700">
                                <p class="text-sm text-gray-300">"Clã brasileiro amigável! Focamos em diversão e crescimento conjunto. Todos são bem-vindos!"</p>
                                <div class="flex items-center mt-2 space-x-4 text-xs text-gray-400">
                                    <span>⚔️ Guerra: Frequentemente</span>
                                    <span>🛡️ Liga: Ouro I</span>
                                    <span>📅 Ativo há 1 hora</span>
                                </div>
                            </div>
                        </div>

                        <!-- Clan 3 -->
                        <div class="clan-card rounded-lg p-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between">
                                <div class="flex items-center mb-4 md:mb-0">
                                    <div class="w-16 h-16 bg-green-800 rounded-full flex items-center justify-center mr-4 border-2 border-yellow-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 100 100">
                                            <path d="M50,20 L20,80 L80,80 Z" fill="#4CAF50"/>
                                            <circle cx="50" cy="50" r="15" fill="#F7B500"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center mb-2">
                                            <h3 class="text-xl font-bold mr-3">Fúria Noturna</h3>
                                            <span class="level-badge text-xs px-2 py-1 rounded-full text-white font-bold">Nível 17</span>
                                        </div>
                                        <p class="text-gray-400 text-sm mb-2">#GHI789 • Brasil 🇧🇷</p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="trophy font-bold flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                41,567
                                            </span>
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                                                </svg>
                                                49/50
                                            </span>
                                            <span class="war-badge text-xs px-2 py-1 rounded-full text-white font-bold">
                                                🏆 156 vitórias
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-2">
                                    <span class="badge-open text-xs px-3 py-1 rounded-full text-white font-bold">ABERTO</span>
                                    <p class="text-xs text-gray-400">Troféus mín: 1800</p>
                                    <button class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-4 rounded transition duration-300">
                                        Ver Detalhes
                                    </button>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-700">
                                <p class="text-sm text-gray-300">"Clã noturno para quem joga de madrugada! Guerras estratégicas e muito companheirismo."</p>
                                <div class="flex items-center mt-2 space-x-4 text-xs text-gray-400">
                                    <span>⚔️ Guerra: Sempre</span>
                                    <span>🛡️ Liga: Ouro II</span>
                                    <span>📅 Ativo há 30 min</span>
                                </div>
                            </div>
                        </div>

                        <!-- Clan 4 -->
                        <div class="clan-card rounded-lg p-6">
                            <div class="flex flex-col md:flex-row md:items-center justify-between">
                                <div class="flex items-center mb-4 md:mb-0">
                                    <div class="w-16 h-16 bg-purple-800 rounded-full flex items-center justify-center mr-4 border-2 border-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 100 100">
                                            <circle cx="50" cy="50" r="30" fill="#9C27B0"/>
                                            <circle cx="50" cy="50" r="15" fill="#F7B500"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center mb-2">
                                            <h3 class="text-xl font-bold mr-3">Reis da Guerra</h3>
                                            <span class="level-badge text-xs px-2 py-1 rounded-full text-white font-bold">Nível 16</span>
                                        </div>
                                        <p class="text-gray-400 text-sm mb-2">#JKL012 • Brasil 🇧🇷</p>
                                        <div class="flex items-center space-x-4 text-sm">
                                            <span class="trophy font-bold flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                                </svg>
                                                39,845
                                            </span>
                                            <span class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                                                </svg>
                                                47/50
                                            </span>
                                            <span class="war-badge text-xs px-2 py-1 rounded-full text-white font-bold">
                                                🏆 201 vitórias
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-2">
                                    <span class="badge-invite text-xs px-3 py-1 rounded-full text-white font-bold">CONVITE</span>
                                    <p class="text-xs text-gray-400">Troféus mín: 2200</p>
                                    <button class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-2 px-4 rounded transition duration-300">
                                        Ver Detalhes
                                    </button>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-700">
                                <p class="text-sm text-gray-300">"Especialistas em guerra! Buscamos jogadores experientes para dominar as batalhas."</p>
                                <div class="flex items-center mt-2 space-x-4 text-xs text-gray-400">
                                    <span>⚔️ Guerra: Sempre</span>
                                    <span>🛡️ Liga: Ouro III</span>
                                    <span>📅 Ativo há 45 min</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center mt-8">
                        <div class="flex space-x-2">
                            <button class="px-3 py-2 bg-gray-700 hover:bg-gray-600 rounded transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button class="px-4 py-2 bg-yellow-500 text-blue-900 font-bold rounded">1</button>
                            <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded transition duration-300">2</button>
                            <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded transition duration-300">3</button>
                            <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded transition duration-300">4</button>
                            <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded transition duration-300">5</button>
                            <button class="px-3 py-2 bg-gray-700 hover:bg-gray-600 rounded transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@push('styles')
    @vite(['resources/css/clans.css'])
@endpush
