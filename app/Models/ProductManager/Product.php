<?php


namespace App\Models\ProductManager;


use App\Models\ShoppingProcessManager\OrderItem;
use App\Models\Color;

use App\Models\Brand;
use App\Models\ProductColor;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;


    public function productcategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors');
    }

 
  



    public function discount(): HasOne
    {
        return $this->hasOne(ProductDiscount::class);
    }

    public function orderitems(): HasOne
    {
        return $this->hasOne(OrderItem::class);
    }
    public function productColors():HasMany{
        return $this->hasMany(ProductColor::class);
    }




    ///these are field that are mass assignable
    protected $fillable = [
        'products_category_id',
        'brand_id',
        'name',
        'slug',
        'description',


    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }
}
