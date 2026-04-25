<?php

namespace App\Console\Commands;

use App\Models\Produit;
use Illuminate\Console\Command;

class SupprimerProduitsInsuffisants extends Command
{
    // Étape 16 : Commande artisan
    protected $signature   = 'produits:nettoyer {--seuil=5 : Supprimer les produits avec quantité inférieure à ce seuil}';
    protected $description = 'Supprime tous les produits dont la quantité est inférieure à 5';

    public function handle(): void
    {
        $seuil = (int) $this->option('seuil');

        $produits = Produit::where('quantite', '<', $seuil)->get();

        if ($produits->isEmpty()) {
            $this->info("Aucun produit avec quantité < {$seuil}. Rien à supprimer.");
            return;
        }

        $this->table(
            ['ID', 'Nom', 'Quantité'],
            $produits->map(fn($p) => [$p->id, $p->nom, $p->quantite])
        );

        if ($this->confirm("Supprimer ces {$produits->count()} produit(s) ?")) {
            Produit::where('quantite', '<', $seuil)->delete();
            $this->info("{$produits->count()} produit(s) supprimé(s) avec succès.");
        } else {
            $this->info('Opération annulée.');
        }
    }
}
