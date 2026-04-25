<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CanEditProduit
{
    // Étape 14 : Empêcher l'accès aux utilisateurs non autorisés
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Vérifier si l'utilisateur a la permission 'edit-produits'
        // (définie via Spatie Permission ou Gate Laravel)
        if (!auth()->user()->can('edit-produits')) {
            return redirect()->route('produits.index')
                             ->with('error', 'Accès refusé : vous n\'êtes pas autorisé à modifier les produits.');
        }

        return $next($request);
    }
}
