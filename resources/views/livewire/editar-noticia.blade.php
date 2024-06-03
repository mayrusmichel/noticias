<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Notícia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(isset($noticia))
                        <div class="max-w-xl mx-auto">
                            @if($noticia->image)
                                <img id="preview-image" src="{{ asset('storage/' . $noticia->image) }}" alt="{{ $noticia->title }}" class="w-full rounded-t-lg">
                            @endif
                            <div class="p-4">
                                <form action="{{ route('editar-noticia', ['id' => $noticia->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                                        <input type="text" name="title" id="title" value="{{ $noticia->title }}" class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full">
                                    </div>
                                    <div class="mb-4">
                                        <label for="description" class="block text-sm font-medium text-gray-700">Descrição</label>
                                        <textarea name="description" id="description" rows="3" class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full">{{ $noticia->description }}</textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="image" class="block text-sm font-medium text-gray-700">Imagem</label>
                                        <input type="file" name="image" id="image" class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 block w-full" onchange="previewImage(event)">
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-200 disabled:opacity-25 transition">Atualizar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @else
                        <p>Notícia não encontrada.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview-image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
