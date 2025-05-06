<x-guest-layout>
    <div class="text-center my-5">
        <h1 class="text-2xl font-bold">Escape Game</h1>
        <p class="text-gray-600 mt-2">Connecte toi ou inscrit toi pour continuer.</p>
    </div>
    <div class="flex justify-center space-x-4 mt-5">
        <x-primary-button>
            <a href="{{ route('login') }}" class="text-white no-underline">Login</a>
        </x-primary-button>
        <x-primary-button>
            <a href="{{ route('register') }}" class="text-white no-underline">Register</a>
        </x-primary-button>
    </div>
</x-guest-layout>

