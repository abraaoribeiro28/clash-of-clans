<header class="bg-gradient-to-r from-blue-900 to-indigo-900 border-b-4 border-yellow-500 fixed top-0 z-50 w-full">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center">
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/lendario.png') }}" alt="Logo" class="max-h-16" style="filter: drop-shadow(0 2px 14px rgba(255, 255, 255, 0.3));">
                <h1 class="text-2xl font-bold ml-2 text-white">Clash Of Clans</h1>
            </a>
        </div>
        <nav class="hidden md:flex space-x-6">
            <a href="#" class="text-white hover:text-yellow-400 font-medium">Início</a>
            <a href="#" class="text-white hover:text-yellow-400 font-medium">Classificações</a>
            <a href="#" class="text-white hover:text-yellow-400 font-medium">Estratégias</a>
        </nav>
        <button id="btn-menu" class="md:hidden text-white relative z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
</header>

<div id="mobile-menu" class="fixed md:hidden top-18 right-4 bg-white rounded-lg shadow-lg p-4 hidden z-50">
    <a href="#" class="block py-2 px-3 text-gray-700 hover:bg-yellow-100 rounded">Início</a>
    <a href="#" class="block py-2 px-3 text-gray-700 hover:bg-yellow-100 rounded">Classificações</a>
    <a href="#" class="block py-2 px-3 text-gray-700 hover:bg-yellow-100 rounded">Estratégias</a>
</div>
