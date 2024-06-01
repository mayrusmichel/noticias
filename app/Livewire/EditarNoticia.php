<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Noticia;

class EditarNoticia extends Component
{
    public $noticia;

    public function mount($noticiaId)
    {
        $this->noticia = Noticia::findOrFail($noticiaId);
    }

    public function render()
    {
        return view('livewire.editar-noticia', ['noticia' => $this->noticia]);
    }
}
