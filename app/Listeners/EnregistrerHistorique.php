<?php

namespace App\Listeners;

use App\Events\ProduitModifie;
use Illuminate\Support\Facades\Log;

class EnregistrerHistorique
{
    // Étape 17 : Enregistrer l'historique des modifications
    public function handle(ProduitModifie $event): void
    {
        Log::info('Produit modifié', [
            'id'            => $event->produit->id,
            'nom'           => $event->produit->nom,
            'modifications' => $event->produit->getDirty(),
            'modifie_par'   => auth()->id() ?? 'système',
            'date'          => now()->toDateTimeString(),
        ]);
    }
}
