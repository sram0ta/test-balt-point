<?php

use App\Http\Controllers\RecipeController;

Route::get('/', fn () => redirect()->route('recipes.index'));
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');
