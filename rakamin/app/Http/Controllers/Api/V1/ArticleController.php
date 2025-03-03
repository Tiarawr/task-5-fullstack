<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
class ArticleController extends Controller
{

    public function index(Request $request)
    {
        $query = Article::query();
    if ($request->filled('category_id')) {
        $query->where('category_id', $request->category_id);
    }

    // Dapatkan artikel
    $articles = $query->latest()->paginate(10);

    return response()->json($articles);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function show($id)
    {
        $article = Article::with('category')->findOrFail($id);
        return response()->json($article);
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return response()->json($article);
    }

    public function destroy($id)
    {
        Article::destroy($id);
        return response()->json(null, 204);
    }
}