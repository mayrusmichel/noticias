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
}
