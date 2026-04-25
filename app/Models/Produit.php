<?php

namespace App\Models;

use App\Events\ProduitCree;
use App\Events\ProduitModifie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'prix',
        'quantite',
    ];

    protected $casts = [
        'prix'     => 'decimal:2',
        'quantite' => 'integer',
    ];

    protected static function booted(): void
    {
        static::created(function (Produit $produit) {
            event(new ProduitCree($produit));
        });

        static::updated(function (Produit $produit) {
            event(new ProduitModifie($produit));
        });
    }
}