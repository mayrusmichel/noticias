<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Noticia;

class ListarNoticias extends Component
{
    public function render()
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->paginate(6);

        return view('livewire.listarNoticias', [
            'noticias' => $noticias
        ]);
    }

    public function buscar()
    {
        $this->page = 1;

        if (!empty($this->search)) {
            $this->noticias = Noticia::with('user')
                ->where('title', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(6);
        } else {
            $this->noticias = Noticia::with('user')->orderBy('created_at', 'desc')->paginate(6);
        }
    }
}
