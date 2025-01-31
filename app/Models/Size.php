<?php

namespace App\Models;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Size extends Model
{
    use HasFactory;
    public function product_variants():HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }
}
