<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::with('category')->paginate(0);
        return view('recipes.index', compact('recipes'));
    }

    public function create()
    {
        $categories = Category::orderBy('title')->get();
        return view('recipes.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id'  => 'required|exists:categories,id',
            'name'         => 'required|string|max:255',
            'ingredients'  => 'required|string',
            'instructions' => 'required|string',
            'cooking_time' => 'nullable|integer|min:1',
        ]);

        Recipe::create($data);

        return redirect()->route('recipes.index')->with('status', 'Рецепт добавлен!');
    }
}
