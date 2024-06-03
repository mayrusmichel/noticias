<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Noticia;
use Illuminate\Support\Facades\Storage;

class EditarNoticiaController extends Controller
{
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    public function save(Request $request, $id)
    {

        try {
            $validatedData = $request->validate($this->rules);

            $noticia = Noticia::find($id);
            if (!$noticia) {
                return back()->withErrors(['error' => 'Notícia não encontrada.']);
            }


            // Verifica se há uma nova imagem
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                // Deleta a imagem antiga, se existir
                if ($noticia->image) {
                    Storage::disk('public')->delete($noticia->image);
                }
                $noticia->image = $imagePath; // Salva o caminho da nova imagem
            }

            // Atualiza os outros campos da notícia
            $noticia->title = $validatedData['title'];
            $noticia->description = $validatedData['description'];

            // Adicione o dd para verificar os dados antes de salvar

            $noticia->save(); // Atualiza a notícia no banco de dados

            return redirect('/dashboard')->with('success', 'Notícia atualizada com sucesso!');
        } catch (\Exception $e) {
            Log::error('Ocorreu um erro ao salvar a notícia: ' . $e->getMessage());
            return back()->withInput()->withErrors(['error' => 'Ocorreu um erro ao salvar a notícia.']);
        }
    }

}
