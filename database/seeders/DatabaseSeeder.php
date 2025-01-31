<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ProductManager\Product;
use App\Models\ProductManager\ProductCategory;
use App\models\Brand;
use App\Models\Color;
use App\Models\Size;
use App\Models\ProductVariant;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
   Size::factory(7)->create();
    // Color::factory(3)->create();
      Brand::factory(5)->create();
 ProductCategory::factory(3)->create();
 Product::factory(1)->create();
//  ProductVariant::factory(5)->create();
  // User::factory(3)->create();
     
    }
}
