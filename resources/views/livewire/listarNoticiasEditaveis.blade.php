<div>
    <div class="mb-4 flex justify-between items-center">
        <div class="flex w-3/4">
            <input type="text" wire:model="search" placeholder="Buscar título da notícia" class="w-full border border-gray-300 p-2 rounded-md">
        </div>
        <div class="flex w-1/4 justify-end">
            <button wire:click="buscar" class="bg-blue-500 text-white text-xs py-1 px-4 rounded-md mr-2">Buscar</button>
            <button wire:click="limparBusca" class="bg-red-500 text-white text-xs py-1 px-4 rounded-md">Limpar</button>
        </div>
    </div>



    @php
        $gruposNoticias = !empty($noticias) ? $noticias->chunk(3) : [];
    @endphp

    @foreach($gruposNoticias as $grupo)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 m-8 ">
            @foreach($grupo as $noticia)
                <div class="bg-white  overflow-hidden shadow-xl sm:rounded-lg">
                    <img src="{{ asset('storage/' . $noticia->image) }}" alt="{{ $noticia->title }}" class="w-full object-cover">

                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-2 ">{{ $noticia->title }}</h3>
                        <p class="text-gray-600 mb-4 text-sm">{{ $noticia->description }}</p>
                        <div class="flex items-center justify-between mb-2">
                            <p class="text-gray-500 text-xs">{{ $noticia->created_at->format('d/m/Y') }}</p>
                            <p class="text-gray-500 text-xs"> Autor: {{ $noticia->user->name }}</p>
                        </div>
                        <div class="flex justify-between">
                            <button wire:click="editar({{ $noticia->id }})" class="px-4 py-1 text-white text-xs bg-blue-500 rounded hover:bg-blue-600 mr-2">Editar</button>
                            <button wire:click="excluir({{ $noticia->id }})" wire:loading.attr="disabled" wire:target="excluir({{ $noticia->id }})"
                                id="excluirBtn{{ $noticia->id }}" class="px-4 text-xs py-1 text-white rounded bg-red-500"
                               ({{ $noticia->id }})">Excluir
                                <span wire:loading wire:target="excluir({{ $noticia->id }})">
                                    <svg class="animate-spin h-5 w-5 mr-3 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A8.008 8.008 0 014.01 4.102L2.586 5.517A9.963 9.963 0 002 12h4v5.291zM12 20a8 8 0 01-8-8h-4c0 6.627 5.373 12 12 12v-4zm3.414-5.517l1.415-1.415A9.963 9.963 0 0022 12h-4v-5.291a8.008 8.008 0 01-3.99 11.183z"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    <div class="mt-4 flex justify-end">
        <!-- Verifica se $noticias está definido antes de chamar o método links() -->
        @if(!empty($noticias))
            {{ $noticias->links() }}
        @endif
    </div>
</div>
