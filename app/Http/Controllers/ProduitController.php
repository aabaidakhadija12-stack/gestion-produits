<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProduitController extends Controller
{
    // Étape 8 + 15 : Liste avec pagination et recherche
    public function index(Request $request): View
    {
        $query = Produit::query();

        if ($request->filled('search')) {
            $s = $request->search;
            $query->where('nom', 'like', "%{$s}%")
                  ->orWhere('description', 'like', "%{$s}%");
        }

        $produits = $query->latest()->paginate(10)->withQueryString();

        return view('produits.index', compact('produits'));
    }

    // Étape 9 : Formulaire ajout
    public function create(): View
    {
        return view('produits.create');
    }

    // Étape 12 : Validation + enregistrement
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nom'         => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix'        => 'required|numeric|min:0',
            'quantite'    => 'required|integer|min:0',
        ]);

        Produit::create($validated);

        return redirect()->route('produits.index')
                         ->with('success', 'Produit ajouté avec succès !');
    }

    // Étape 10 : Formulaire édition
    public function edit(Produit $produit): View
    {
        return view('produits.edit', compact('produit'));
    }

    public function update(Request $request, Produit $produit): RedirectResponse
    {
        $validated = $request->validate([
            'nom'         => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix'        => 'required|numeric|min:0',
            'quantite'    => 'required|integer|min:0',
        ]);

        $produit->update($validated);

        return redirect()->route('produits.index')
                         ->with('success', 'Produit modifié avec succès !');
    }

    // Étape 11 : Vue de confirmation
    public function confirmDelete(Produit $produit): View
    {
        return view('produits.confirm-delete', compact('produit'));
    }

    public function destroy(Produit $produit): RedirectResponse
    {
        $produit->delete();

        return redirect()->route('produits.index')
                         ->with('success', 'Produit supprimé avec succès !');
    }
}
