<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test bahwa user yang sudah di-autentikasi bisa mendapatkan daftar artikel.
     *
     * @return void
     */
    public function test_can_list_articles()
    {
        // Buat user untuk test
        /** @var \App\Models\User $user */
        $user = User::factory()->create();

        // Autentikasi user dengan guard 'api' (yang sudah diset ke Passport di config/auth.php)
        $this->actingAs($user, 'api');

        // Buat beberapa artikel untuk diuji
        Article::factory()->count(10)->create();

        // Lakukan request GET ke endpoint articles
        $response = $this->get('/api/v1/articles');

        // Pastikan response statusnya 200 dan memiliki struktur JSON yang diharapkan
        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'data' => [
                         '*' => [
                             'id', 'title', 'content', 'image', 'user_id', 'category_id', 'created_at', 'updated_at'
                         ]
                     ]
                 ]);
    }
}
