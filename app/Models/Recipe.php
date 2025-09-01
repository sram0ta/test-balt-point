<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recipe extends Model
{
    protected $fillable = ['category_id', 'name', 'ingredients', 'instructions', 'cooking_time'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
