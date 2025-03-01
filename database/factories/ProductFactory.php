<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=>fake()->uuid(),
            'name' => fake()->words(3, true), // Tạo tên sản phẩm ngẫu nhiên
            'description' => fake()->text(200), // Mô tả sản phẩm
            'min_price' => fake()->numberBetween(1000, 10000), // Giá sản phẩm thấp nhất
            'max_price' => fake()->numberBetween(10000, 100000), // Giá sản phẩm cao nhất
            'code' => fake()->bothify('PROD-####'), // Mã sản phẩm dạng PROD-1234
            'slug' => fake()->slug(), // Tạo slug từ Faker
            'image' => fake()->imageUrl(640, 480, 'products', true), // URL ảnh giả định
            'min_price' => fake()->numberBetween(500, 9000), // Giá tối thiểu
            'max_price' => fake()->numberBetween(1000, 15000), // Giá tối đa
            'condition' => fake()->randomElement(['default', 'new', 'hot']), // Tình trạng sản phẩm
            'is_active' => fake()->numberBetween(0, 1), 
        ];
    }
}
