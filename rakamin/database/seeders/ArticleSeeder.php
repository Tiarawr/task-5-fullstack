<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        // Pastikan ada user dan kategori sebelum membuat artikel
        if (User::count() == 0) {
            User::factory(10)->create(); // Buat 10 user dummy
        }

        if (Category::count() == 0) {
            $categories = ['Teknologi', 'Bisnis', 'Kesehatan', 'Olahraga', 'Hiburan'];
            foreach ($categories as $category) {
                Category::create(['name' => $category]);
            }
        }

        // Buat 100 artikel secara otomatis dengan factory
        Article::factory(100)->create();
    }
}
