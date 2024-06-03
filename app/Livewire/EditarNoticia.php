<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Noticia;
use Livewire\WithFileUploads;

class EditarNoticia extends Component
{
    use WithFileUploads;

    public $noticia;
    public $title;
    public $description;
    public $image;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'image' => 'nullable|image|max:1024', // Max size: 1MB
    ];

    public function mount($noticiaId)
    {
dd ($noticiaId);
        $this->noticia = Noticia::findOrFail($noticiaId);
        $this->title = $this->noticia->title;
        $this->description = $this->noticia->description;
    }

    // public function update()
    // {
    //     $this->validate();

    //     if ($this->image) {
    //         // Salvar a imagem e obter o caminho
    //         $imagePath = $this->image->store('noticias', 'public');

    //         // Excluir a imagem antiga, se existir
    //         if ($this->noticia->image) {
    //             Storage::disk('public')->delete($this->noticia->image);
    //         }

    //         // Atualizar os dados da notícia
    //         $this->noticia->update([
    //             'title' => $this->title,
    //             'description' => $this->description,
    //             'image' => $imagePath,
    //         ]);
    //     } else {
    //         // Atualizar os dados da notícia sem alterar a imagem
    //         $this->noticia->update([
    //             'title' => $this->title,
    //             'description' => $this->description,
    //         ]);
    //     }

    //     session()->flash('message', 'Notícia atualizada com sucesso.');

    //     return redirect()->route('rota_para_listar_noticias');
    // }

    public function render()
    {
        return view('livewire.editar-noticia', ['noticia' => $this->noticia]);
    }
}
