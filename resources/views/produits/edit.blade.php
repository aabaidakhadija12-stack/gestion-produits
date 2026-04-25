@extends('layouts.app')

@section('content')
<style>
    .form-card { background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.07); padding: 2rem; max-width: 600px; }
    .form-card h2 { font-size: 1.4rem; color: #1a1a2e; margin-bottom: 1.5rem; }
    .form-group { margin-bottom: 1.2rem; }
    .form-group label { display: block; font-size: 0.9rem; font-weight: 600; color: #555; margin-bottom: 0.4rem; }
    .form-group input, .form-group textarea {
        width: 100%; padding: 0.6rem 0.9rem; border: 1px solid #ddd;
        border-radius: 6px; font-size: 0.95rem; transition: border 0.2s;
    }
    .form-group input:focus, .form-group textarea:focus {
        outline: none; border-color: #f8961e; box-shadow: 0 0 0 3px rgba(248,150,30,0.1);
    }
    .form-group textarea { min-height: 100px; resize: vertical; }
    .error-msg { color: #e63946; font-size: 0.82rem; margin-top: 4px; }
    .form-actions { display: flex; gap: 0.8rem; margin-top: 1.5rem; }
</style>

<div class="form-card">
    <h2>✏️ Modifier : {{ $produit->nom }}</h2>

    <form method="POST" action="{{ route('produits.update', $produit) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom du produit *</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom', $produit->nom) }}" required>
            @error('nom') <p class="error-msg">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description', $produit->description) }}</textarea>
            @error('description') <p class="error-msg">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="prix">Prix (DH) *</label>
            <input type="number" id="prix" name="prix" value="{{ old('prix', $produit->prix) }}" step="0.01" min="0" required>
            @error('prix') <p class="error-msg">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="quantite">Quantité *</label>
            <input type="number" id="quantite" name="quantite" value="{{ old('quantite', $produit->quantite) }}" min="0" required>
            @error('quantite') <p class="error-msg">{{ $message }}</p> @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-warning">Mettre à jour</button>
            <a href="{{ route('produits.index') }}" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>
@endsection
