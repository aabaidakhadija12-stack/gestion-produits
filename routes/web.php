<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->get('/dashboard', function () {
    return redirect()->route('produits.index');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect()->route('produits.index');
    });

    Route::get('/produits', [ProduitController::class, 'index'])->name('produits.index');
    Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');
    Route::post('/produits', [ProduitController::class, 'store'])->name('produits.store');
    Route::get('/produits/{produit}/edit', [ProduitController::class, 'edit'])->name('produits.edit');
    Route::put('/produits/{produit}', [ProduitController::class, 'update'])->name('produits.update');
    Route::get('/produits/{produit}/confirm-delete', [ProduitController::class, 'confirmDelete'])->name('produits.confirm-delete');
    Route::delete('/produits/{produit}', [ProduitController::class, 'destroy'])->name('produits.destroy');
});

require __DIR__.'/auth.php';