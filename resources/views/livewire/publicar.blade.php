<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publicar Notícias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="max-w-xl mx-auto">
                        <img id="preview-image" src="#" alt="Imagem de visualização" class="rounded mb-4" style="display: none;">

                        <form class="post" action="{{ route('publish') }}" method="post" wire:submit.prevent="save" enctype="multipart/form-data">
                            @csrf <!-- Adicione o token CSRF para proteção contra CSRF -->
                            <div class="mb-4">
                                <label for="title" class="block font-medium text-sm text-gray-700">Título</label>
                                <input wire:model="title" id="title" name="title" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block font-medium text-sm text-gray-700">Descrição</label>
                                <textarea wire:model="description" id="description" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                                @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <div class="mb-4">
                                    <span class="mr-2">Selecione uma imagem</span>
                                    <input type="file" name="image" id="image" class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full" onchange="previewImage(event)">
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF até 10MB</p>
                                </div>
                                @error('image')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                <div class="mt-4">
                                    <img id="image-preview" class="hidden w-full rounded-md border border-gray-300" />
                                </div>
                            </div>

                            <div class="mt-6">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition">Publicar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script>
    function previewImage(event) {
        var input = event.target;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview-image');
                output.src = reader.result;
                output.style.display = 'block'; // Exibe a imagem de visualização
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


