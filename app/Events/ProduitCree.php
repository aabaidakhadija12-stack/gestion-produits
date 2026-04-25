<?php

namespace App\Events;

use App\Models\Produit;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProduitCree
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public Produit $produit) {}
}
