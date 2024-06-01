<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Noticia;

class ListarNoticiasEditaveis extends Component
{
    public function render()
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->paginate(6);

        return view('livewire.listarNoticiasEditaveis', [
            'noticias' => $noticias
        ]);
    }

    public function editar($id)
    {
        return redirect()->route('editar_noticia', ['id' => $id]);
    }

    public function excluir($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();

        return redirect()->route('dashboard')->with('success', 'Notícia excluída com sucesso!');
    }
}
