<?php

namespace App\Models\ProductManager;

use App\Models\Color;
use App\Models\ProductManager\Product;
use App\Models\ProductColor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class ProductImage extends Model
{
    use HasFactory;
    public function productColor():BelongsTo
    {
        return $this->belongsTo(ProductColor::class);
    }
    
    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_colors');
    }
    public function color():BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_colors');
    }
  

 

}
