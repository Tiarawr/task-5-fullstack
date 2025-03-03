@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
<div class="max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Daftar Artikel</h1>

<form action="{{ route('articles.index') }}" method="GET" class="mb-4">
    <select name="category_id"
        class="px-4 py-2 border border-black rounded-md bg-white text-black focus:ring focus:bg-white appearance-none"
        onchange="this.form.submit()">
        <option value="" class="bg-white text-black">Semua Kategori</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" class="bg-white text-black"
                {{ request('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</form>



    <!-- Grid Artikel -->
    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6">
        @foreach($articles as $article)
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow overflow-hidden">
            <img src="{{ asset('storage/image.png') }}" alt="Gambar Artikel" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
                    <p class="text-gray-500 text-sm">Kategori: {{ $article->category->name }}</p>
                    <a href="{{ route('articles.show', $article) }}" class="mt-2 inline-block text-blue-500 hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $articles->links() }}
    </div>
</div>
@endsection
