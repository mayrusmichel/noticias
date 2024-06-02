<div>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(100%, 1fr)); gap: 1rem;">
        @foreach($noticias as $noticia)
        <div style="background-color: #fff; overflow: hidden; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24); border-radius: 0.375rem; margin-bottom: 1rem; display: flex;">
            <!-- Foto à esquerda -->
            <div style="width: 50%;">
                <img src="{{ asset('storage/' . $noticia->image) }}" alt="{{ $noticia->title }}" style="width: 100%; object-fit: cover;">
            </div>
            <!-- Dados à direita -->
            <div style="padding: 1rem; width: 50%;">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">{{ $noticia->title }}</h3>
                <p style="color: #4b5563; font-size: 0.875rem; margin-bottom: 1rem;">{{ $noticia->description }}</p>
                <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                    <p style="color: #6b7280; font-size: 0.75rem;">{{ $noticia->created_at->format('d/m/Y') }}</p>
                    <p style="color: #6b7280; font-size: 0.75rem;">User ID: {{ $noticia->user_id }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div style="margin: 1rem;">
        {{ $noticias->links() }}
    </div>
</div>
