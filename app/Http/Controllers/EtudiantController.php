<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EtudiantController extends Controller
{
    /**
     * Règles de validation communes à store() et update().
     */
    private function validationRules(): array
    {
        return [
            'nom'     => 'required|string|max:255',
            'prenom'  => 'required|string|max:255',
            'age'     => 'required|numeric',
            'email'   => 'required|email|max:255',
            'classe'  => 'required|string|max:10',
            'contact' => 'required|string|max:20',
        ];
    }

    /**
     * Affiche la liste des étudiants.
     */
    public function index(): View
    {
        $etudiants = Etudiant::all();

        return view('etudiant.index', compact('etudiants'));
    }

    /**
     * Affiche le formulaire de création.
     */
    public function create(): View
    {
        return view('etudiant.create');
    }

    /**
     * Enregistre un nouvel étudiant.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate($this->validationRules());

        Etudiant::create($validated);

        return redirect()
            ->route('etudiant.index')
            ->with('success', 'Étudiant ajouté avec succès !');
    }

    /**
     * Affiche les informations d'un étudiant.
     */
    public function show(Etudiant $etudiant): View
    {
        return view('etudiant.show', compact('etudiant'));
    }

    /**
     * Affiche le formulaire d'édition d'un étudiant.
     */
    public function edit(Etudiant $etudiant): View
    {
        return view('etudiant.update', compact('etudiant'));
    }

    /**
     * Met à jour un étudiant existant.
     */
    public function update(Request $request, Etudiant $etudiant): RedirectResponse
    {
        $validated = $request->validate($this->validationRules());

        $etudiant->update($validated);

        return redirect()
            ->route('etudiant.index')
            ->with('update', 'Étudiant modifié avec succès !');
    }

    /**
     * Supprime un étudiant.
     */
    public function destroy(Etudiant $etudiant): RedirectResponse
    {
        $etudiant->delete();

        return redirect()
            ->route('etudiant.index')
            ->with('delete', 'Étudiant supprimé avec succès !');
    }
}