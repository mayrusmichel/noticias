<?php

namespace App\Livewire;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use App\Models\Noticia;
use Illuminate\Validation\Rule;

class Publicar extends Component
{
    public function render()
    {
        return view('livewire.publicar');

    }


}
