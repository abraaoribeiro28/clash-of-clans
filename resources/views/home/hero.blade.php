<section id="inicio" class="relative overflow-hidden md:h-screen">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full blur-sm bg-hero"></div>
        <div class="absolute inset-0 bg-black/40"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10 h-full">
        <div class="flex flex-col md:flex-row items-center h-full md:pt-16 md:pb-0 pt-40 pb-20">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">
                    DOMINE O CAMPO
                    <br>DE BATALHA!
                </h2>
                <p class="text-lg mb-8 text-gray-300">
                    Acompanhe os melhores clãs, jogadores e estratégias
                    <br>para se tornar uma lenda em Clash of Clans!
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <button class="bg-yellow-500 hover:bg-yellow-600 text-blue-900 font-bold py-3 px-6 rounded-lg transition duration-300 shadow-lg">
                        Ver Rankings
                    </button>
                    <button class="border-2 border-yellow-500 hover:bg-yellow-500 hover:text-blue-900 text-yellow-500 font-bold py-3 px-6 rounded-lg transition duration-300">
                        Buscar Clã
                    </button>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('images/hero_queen.png') }}" alt="Rainha arqueira" class="md:max-h-none max-h-110">
            </div>
        </div>
    </div>
</section>
