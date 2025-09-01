<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Супы',
            'Салаты',
            'Выпечка',
        ];

        $categoryModels = [];
        foreach ($categories as $c) {
            $categoryModels[] = Category::create(['title' => $c]);
        }

        $recipes = [
            ['name' => 'Борщ', 'cat' => 0, 'time' => 90],
            ['name' => 'Окрошка', 'cat' => 0, 'time' => 30],
            ['name' => 'Оливье', 'cat' => 1, 'time' => 45],
            ['name' => 'Греческий салат', 'cat' => 1, 'time' => 20],
            ['name' => 'Пирог с яблоками', 'cat' => 2, 'time' => 60],
            ['name' => 'Пицца', 'cat' => 2, 'time' => 50],
            ['name' => 'Хачапури', 'cat' => 2, 'time' => 70],
            ['name' => 'Щи', 'cat' => 0, 'time' => 80],
            ['name' => 'Винегрет', 'cat' => 1, 'time' => 35],
            ['name' => 'Сырники', 'cat' => 2, 'time' => 25],
        ];

        foreach ($recipes as $r) {
            Recipe::create([
                'category_id'  => $categoryModels[$r['cat']]->id,
                'name'         => $r['name'],
                'ingredients'  => 'Ингредиенты для ' . $r['name'],
                'instructions' => 'Как готовить ' . $r['name'],
                'cooking_time' => $r['time'],
            ]);
        }
    }
}
