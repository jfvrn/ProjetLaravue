<x-app-layout>
    @php
        $stories = \App\Models\Story::all();
    @endphp

    <div class="container mx-auto py-8 px-10">
        <h1 class="text-3xl font-bold text-center mb-8 text-white ">Choisis une histoire</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">
            @foreach($stories as $story)
                <div class="shadow-md rounded-lg p-6 {{ $story->available ? 'bg-white' : 'bg-gray-500' }}">
                    <h2 class="text-xl font-semibold mb-4">{{ $story->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ $story->description }}</p>
                    @if($story->available)
                        <a href="/story/{{ $story->id }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Jouer</a>
                    @else
                        <a class="bg-gray-700 text-white px-4 py-2 rounded">Bientôt disponible</a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
