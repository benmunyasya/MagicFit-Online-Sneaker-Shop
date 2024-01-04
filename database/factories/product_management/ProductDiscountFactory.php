<?php

namespace Database\Factories\product_management;

use App\Models\product_management\ProductDiscount;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDiscountFactory extends Factory
{
    protected $model = ProductDiscount::class;

    public function definition()
    {
        return [
            'product_id' => function () {
                return \App\Models\product_management\Product::factory()->create()->id;
            },
            'discount_percentage' => $this->faker->numberBetween(5, 50),
            'discount_amount' => $this->faker->randomFloat(2, 5, 100),
            'start_date' => now()->toDateString(),
            'end_date' => now()->addDays($this->faker->numberBetween(1, 30))->toDateString(),
        ];
    }
}