<?php

namespace Database\Seeders;

use Database\Seeders\CategorySeeder;
use Database\Seeders\ArticleSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategorySeeder::class, // Pastikan kategori dibuat dulu
            ArticleSeeder::class,
        ]);
    }
}
