<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Passage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware; 

class PassageController extends Controller implements HasMiddleware
{
    /**
     * Affiche une liste de tous les passages.
     */
    public static function middleware(): array
	{
		return [
			new Middleware('auth', except: ['index']),
			new Middleware('admin', only: ['destroy']),
		];
	}
    
    public function index()
    {
        $passages = Passage::all();
        return response()->json($passages);
    }

    /**
     * Affiche un passage spécifique.
     */
    public function show($id)
    {
        $passage = Passage::findOrFail($id);
        return response()->json($passage);
    }

    /**
     * Crée un nouveau passage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'parent_id' => 'nullable|exists:passages,id',
        ]);

        $passage = Passage::create($validated);
        return response()->json($passage, 201);
    }

    /**
     * Met à jour un passage existant.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'parent_id' => 'nullable|exists:passages,id',
        ]);

        $passage = Passage::findOrFail($id);
        $passage->update($validated);
        return response()->json($passage);
    }

    /**
     * Supprime un passage.
     */
    public function destroy($id)
    {
        $passage = Passage::findOrFail($id);
        $passage->delete();
        return response()->json(['message' => 'Passage supprimé avec succès.']);
    }
}