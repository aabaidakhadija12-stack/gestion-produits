@extends('layouts.app')

@section('content')
<style>
    .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
    .page-header h1 { font-size: 1.6rem; color: #1a1a2e; }
    .search-form { display: flex; gap: 0.5rem; margin-bottom: 1.5rem; }
    .search-form input { flex: 1; padding: 0.5rem 1rem; border: 1px solid #ddd; border-radius: 6px; font-size: 0.95rem; }
    .search-form button { padding: 0.5rem 1.2rem; background: #4361ee; color: white; border: none; border-radius: 6px; cursor: pointer; }
    table { width: 100%; background: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.07); border-collapse: collapse; overflow: hidden; }
    th { background: #1a1a2e; color: white; padding: 0.9rem 1rem; text-align: left; font-weight: 500; }
    td { padding: 0.85rem 1rem; border-bottom: 1px solid #f0f0f0; }
    tr:last-child td { border-bottom: none; }
    tr:hover td { background: #f8f9ff; }
    .actions { display: flex; gap: 0.5rem; }
    .badge-qty { display: inline-block; padding: 2px 10px; border-radius: 20px; font-size: 0.82rem; }
    .badge-low  { background: #fde8e8; color: #c0392b; }
    .badge-ok   { background: #e8f5e9; color: #2e7d32; }
    .pagination-wrap { margin-top: 1.2rem; display: flex; justify-content: center; background-color: #fff; border-color: #1a1a2e;}
    .empty { text-align: center; padding: 3rem; color: #aaa; }
    .pagination-wrap nav { background: transparent; }
    .pagination-wrap .flex { background: transparent; }
    .pagination-wrap nav > div:first-child { display: none; }
    .pagination-wrap p {display: none !important;}
</style>

<div class="page-header">
    <h1>Liste des Produits</h1>
    <a href="{{ route('produits.create') }}" class="btn btn-primary">+ Nouveau Produit</a>
</div>

{{-- Étape 15 : Recherche --}}
<form class="search-form" method="GET" action="{{ route('produits.index') }}">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Rechercher par nom ou description...">
    <button type="submit">Rechercher</button>
    @if(request('search'))
        <a href="{{ route('produits.index') }}" class="btn btn-secondary">Effacer</a>
    @endif
</form>

@if($produits->isEmpty())
    <div class="empty">
        <p>Aucun produit trouvé.</p>
    </div>
@else
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produits as $produit)
            <tr>
                <td><strong>{{ $produit->nom }}</strong></td>
                <td>{{ Str::limit($produit->description, 60) }}</td>
                <td>{{ number_format($produit->prix, 2) }} DH</td>
                <td>
                    <span class="badge-qty {{ $produit->quantite < 5 ? 'badge-low' : 'badge-ok' }}">
                        {{ $produit->quantite }}
                    </span>
                </td>
                <td>
                    <div class="actions">
                        <a href="{{ route('produits.edit', $produit) }}" class="btn btn-warning">Modifier</a>
                        <a href="{{ route('produits.confirm-delete', $produit) }}" class="btn btn-danger">Supprimer</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Étape 8 : Pagination 10/page --}}
    <div class="pagination-wrap">
        {{ $produits->links() }}
    </div>
@endif
@endsection