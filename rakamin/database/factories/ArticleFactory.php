<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(6), // Judul acak
            'content' => $this->faker->paragraph(10), // Konten acak
            'image' => $this->faker->imageUrl(640, 480, 'business', true, 'Faker'), // URL gambar dummy
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory()->create()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
