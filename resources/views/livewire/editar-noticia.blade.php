<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Notícia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <form> --}}
            <form class="post" action="{{ route('update_noticia', ['id' => $noticia->id]) }}" method="post" wire:submit.prevent="update">
                @csrf <!-- Adicione o token CSRF para proteção contra CSRF -->
                <div>
                    <label for="title" class="block font-medium text-sm text-gray-700">Título</label>
                    <input wire:model="title" id="title" name="title" type="text" value="{{ $noticia->title }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="description" class="block font-medium text-sm text-gray-700">Descrição</label>
                    <textarea wire:model="description" id="description" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ $noticia->description }}</textarea>
                    @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="image" class="block font-medium text-sm text-gray-700">Imagem</label>
                    <input wire:model="image" id="image" name="image" type="file" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    @error('image') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>

                <div>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
