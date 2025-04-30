<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Choix;
use Illuminate\Http\Request;

class ChoixController extends Controller
{
    /**
     * Affiche une liste de tous les choix.
     */
    public function index()
    {
        $choix = Choix::all();
        return response()->json($choix);
    }

    /**
     * Affiche un choix spécifique.
     */
    public function show($id)
    {
        $choix = Choix::findOrFail($id);
        return response()->json($choix);
    }

    /**
     * Crée un nouveau choix.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'passage_id' => 'required|exists:passages,id',
            'texte' => 'required|string|max:255',
            'suivant_id' => 'nullable|exists:passages,id',
        ]);

        $choix = Choix::create($validated);
        return response()->json($choix, 201);
    }

    /**
     * Met à jour un choix existant.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'passage_id' => 'sometimes|required|exists:passages,id',
            'texte' => 'sometimes|required|string|max:255',
            'suivant_id' => 'nullable|exists:passages,id',
        ]);

        $choix = Choix::findOrFail($id);
        $choix->update($validated);
        return response()->json($choix);
    }

    /**
     * Supprime un choix.
     */
    public function destroy($id)
    {
        $choix = Choix::findOrFail($id);
        $choix->delete();
        return response()->json(['message' => 'Choix supprimé avec succès.']);
    }
}