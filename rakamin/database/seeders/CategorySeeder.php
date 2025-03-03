<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Teknologi', 'Bisnis', 'Kesehatan', 'Olahraga', 'Hiburan'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
