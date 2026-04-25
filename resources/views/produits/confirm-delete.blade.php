@extends('layouts.app')

@section('content')
<style>
    .confirm-card { background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.07); padding: 2rem; max-width: 500px; text-align: center; margin: 2rem auto;}
    .confirm-card .icon { font-size: 3rem; margin-bottom: 1rem; }
    .confirm-card h2 { font-size: 1.4rem; color: #1a1a2e; margin-bottom: 0.5rem; }
    .confirm-card p { color: #666; margin-bottom: 1.5rem; }
    .produit-info { background: #fff5f5; border: 1px solid #fde8e8; border-radius: 8px; padding: 1rem; margin-bottom: 1.5rem; text-align: left; }
    .produit-info strong { color: #e63946; }
    .form-actions { display: flex; gap: 0.8rem; justify-content: center; }
</style>

<div class="confirm-card">
    <h2>Confirmer la suppression</h2>
    <p>Êtes-vous sûr de vouloir supprimer ce produit ?</p>

    <div class="produit-info">
        <p><strong>Nom :</strong> {{ $produit->nom }}</p>
        <p><strong>Prix :</strong> {{ number_format($produit->prix, 2) }} DH</p>
        <p><strong>Quantité :</strong> {{ $produit->quantite }}</p>
    </div>

    <div class="form-actions">
        <form method="POST" action="{{ route('produits.destroy', $produit) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Oui, supprimer</button>
        </form>
        <a href="{{ route('produits.index') }}" class="btn btn-secondary">Annuler</a>
    </div>
</div>
@endsection
