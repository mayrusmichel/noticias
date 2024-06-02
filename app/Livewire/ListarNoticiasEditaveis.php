<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Noticia;
use App\Models\User;

class ListarNoticiasEditaveis extends Component
{
    public $search = '';

    public function render()
    {
        $query = Noticia::with('user')->orderBy('created_at', 'desc');

        // Verifica se há um termo de busca e aplica o filtro
        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        $noticias = $query->paginate(6);

        foreach ($noticias as $noticia) {
            $user = User::find($noticia->user_id);
            $noticia->user_name = $user ? $user->name : 'Usuário Desconhecido';
        }

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

    public function limparBusca()
    {
        $this->search = '';

        return redirect()->route('dashboard');
    }

}
