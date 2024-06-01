<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($noticias as $noticia)
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <img src="{{ asset('storage/' . $noticia->image) }}" alt="{{ $noticia->title }}" class="w-full  object-cover">

                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">{{ $noticia->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $noticia->description }}</p>
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-gray-500">{{ $noticia->created_at->format('d/m/Y') }}</p>
                        <p class="text-gray-500">User ID: {{ $noticia->user_id }}</p>
                    </div>
                    <div class="flex justify-between">
                        <button class="px-4 py-2 bg-blue-500  rounded hover:bg-blue-600 mr-2"
                            wire:click="editar({{ $noticia->id }})">Editar</button>
                        <button class="px-4 py-2 bg-red-500"
                            wire:click="excluir({{ $noticia->id }})">Excluir</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $noticias->links() }}
    </div>
</div>
