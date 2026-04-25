<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   // database/factories/ProduitFactory.php
public function definition(): array
{
    return [
        'nom'         => fake()->words(3, true),
        'description' => fake()->sentence(),
        'prix'        => fake()->randomFloat(2, 50, 15000),
        'quantite'    => fake()->numberBetween(1, 50),
    ];
}
    }