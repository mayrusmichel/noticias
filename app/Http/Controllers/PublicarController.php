<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Noticia;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class PublicarController extends Controller
{
    use WithFileUploads;

    public $title = '';
    public $description = '';
    public $image;
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    public function publish(Request $request)
    {
        try {
            $validatedData = $request->validate($this->rules);

            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
            }

            $noticia = Noticia::create([
                'user_id' => Auth::id(),
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => $imagePath,
            ]);

            return redirect('/dashboard');
        } catch (\Exception $e) {
            Log::error('Ocorreu um erro ao publicar a notícia: ' . $e->getMessage());
            return back()->withInput()->withErrors(['error' => 'Ocorreu um erro ao publicar a notícia.']);
        }
    }
}
