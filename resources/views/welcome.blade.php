<x-app-layout>
    <div class="container mx-auto py-8 px-10">
        <h1 class="text-3xl font-bold text-center mb-8 text-white ">Choisis une histoire</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">
            <!-- histoire active -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">La Maison</h2>
                <p class="text-gray-600 mb-4">Tu te réveilles dans une maison, tu dois sortir et vite !</p>
                <a href="/story" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Jouer</a>
            </div>

            <!-- histoire pas encore dispo -->
            <div class="bg-gray-500 shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Life Simulator</h2>
                <p class="text-gray-600 mb-4">Vis la vie que tu as toujours voulu, gare aux choix que tu prends ...</p>
                <a class="bg-gray-700 text-white px-4 py-2 rounded">Bientôt disponible</a>
            </div>

            <div class="bg-gray-500 shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Labyrinthe des ombres</h2>
                <p class="text-gray-600 mb-4">Tu te réveilles dans une maison, tu dois sortir et vite !</p>
                <a class="bg-gray-700 text-white px-4 py-2 rounded">Bientôt disponible</a>
            </div>

        </div>
    </div>
</x-app-layout>
