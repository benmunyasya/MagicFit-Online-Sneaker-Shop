<?php

namespace App\Models;

use App\Models\ProductColor;
use App\Models\ProductManager\Product;
use App\Models\ProductManager\ProductImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Color extends Model
{
    use HasFactory;
    public function productColors(): HasMany
    {
        return $this->hasMany(ProductColor::class);
    }
    public function products():BelongsToMany
{
    return $this->belongsToMany(Product::class, 'product_colors');
}

    
}
