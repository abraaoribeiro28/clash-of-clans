<section class="py-16 bg-gradient-to-b from-transparent to-indigo-900/20">
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
                        <x-classification-item
                            type="clans"
                            name="Guerreiros Elite"
                            details="Nível 20 • 50/50 membros"
                            points="45,789"
                            position="1"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100">
                                <path d="M50,20 L60,40 L80,45 L65,60 L70,80 L50,70 L30,80 L35,60 L20,45 L40,40 Z" fill="#F7B500"></path>
                            </svg>
                        </x-classification-item>

                        <x-classification-item
                            type="clans"
                            name="Dragões do Brasil"
                            details="Nível 18 • 48/50 membros"
                            points="43,210"
                            position="2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100">
                                <path d="M30,30 L70,30 L70,70 L30,70 Z" fill="#F74B00"></path>
                                <path d="M40,40 L60,40 L60,60 L40,60 Z" fill="#F7B500"></path>
                            </svg>
                        </x-classification-item>

                        <x-classification-item
                            type="clans"
                            name="Fúria Noturna"
                            details="Nível 17 • 49/50 membros"
                            points="41,567"
                            position="3"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100">
                                <path d="M50,20 L20,80 L80,80 Z" fill="#4CAF50"></path>
                                <circle cx="50" cy="50" r="15" fill="#F7B500"></circle>
                            </svg>
                        </x-classification-item>

                        <x-classification-item
                            type="clans"
                            name="Reis da Guerra"
                            details="Nível 16 • 47/50 membros"
                            points="39,845"
                            position="4"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="30" fill="#9C27B0"></circle>
                                <circle cx="50" cy="50" r="15" fill="#F7B500"></circle>
                            </svg>
                        </x-classification-item>

                        <x-classification-item
                            type="clans"
                            name="Gladiadores BR"
                            details="Nível 15 • 50/50 membros"
                            points="38,921"
                            position="5"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100">
                                <rect x="25" y="25" width="50" height="50" fill="#F7B500"></rect>
                                <rect x="40" y="40" width="20" height="20" fill="#F74B00"></rect>
                            </svg>
                        </x-classification-item>
                    </ul>

                    <button class="mt-6 w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded transition duration-300">
                        Ver Ranking Completo
                    </button>
                </div>

                <!-- Players Ranking -->
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
                        <x-classification-item
                            type="players"
                            name="ClashMaster"
                            details="CV 14 • Guerreiros Elite"
                            points="6,789"
                            position="1"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </x-classification-item>


                        <x-classification-item
                            type="players"
                            name="BRLegend"
                            details="CV 14 • Dragões do Brasil"
                            points="6,654"
                            position="2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </x-classification-item>

                        <x-classification-item
                            type="players"
                            name="ClashKing"
                            details="CV 14 • Fúria Noturna"
                            points="6,521"
                            position="3"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </x-classification-item>

                        <x-classification-item
                            type="players"
                            name="WarMachine"
                            details="CV 14 • Reis da Guerra"
                            points="6,432"
                            position="4"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </x-classification-item>

                        <x-classification-item
                            type="players"
                            name="ElitePlayer"
                            details="CV 14 • Gladiadores BR"
                            points="6,387"
                            position="5"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </x-classification-item>
                    </ul>

                    <button class="mt-6 w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded transition duration-300">
                        Ver Ranking Completo
                    </button>
                </div>

                <!-- Leagues Ranking -->
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
                        <x-classification-item
                            type="league"
                            name="Liga Lendária I"
                            details="Elite dos jogadores"
                            points="5,000+"
                            position="1"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100">
                                <path d="M50,20 L60,40 L80,45 L65,60 L70,80 L50,70 L30,80 L35,60 L20,45 L40,40 Z" fill="#FFF"></path>
                            </svg>
                        </x-classification-item>

                        <x-classification-item
                            type="league"
                            name="Liga Lendária II"
                            details="Elite dos jogadores"
                            points="4,700+"
                            position="2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100">
                                <path d="M50,20 L60,40 L80,45 L65,60 L70,80 L50,70 L30,80 L35,60 L20,45 L40,40 Z" fill="#FFF"></path>
                            </svg>
                        </x-classification-item>

                        <x-classification-item
                            type="league"
                            name="Liga Lendária III"
                            details="Elite dos jogadores"
                            points="4,400+"
                            position="3"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100">
                                <path d="M50,20 L60,40 L80,45 L65,60 L70,80 L50,70 L30,80 L35,60 L20,45 L40,40 Z" fill="#FFF"></path>
                            </svg>
                        </x-classification-item>


                        <x-classification-item
                            type="league"
                            name="Liga Titã I"
                            details="Jogadores avançados"
                            points="4,100+"
                            position="4"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100">
                                <path d="M30,30 L70,30 L70,70 L30,70 Z" fill="#FFF"></path>
                            </svg>
                        </x-classification-item>

                        <x-classification-item
                            type="league"
                            name="Liga Titã II"
                            details="Jogadores avançados"
                            points="3,800+"
                            position="5"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 100 100">
                                <path d="M30,30 L70,30 L70,70 L30,70 Z" fill="#FFF"></path>
                            </svg>
                        </x-classification-item>
                    </ul>

                    <button class="mt-6 w-full bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded transition duration-300">
                        Ver Detalhes das Ligas
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
