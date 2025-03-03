@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
        @if($article->image)
            <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-64 object-cover">
        @else
            <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                <span class="text-gray-500">No Image Available</span>
            </div>
        @endif
        <div class="p-6">
            <h1 class="text-3xl font-bold mb-4 text-gray-900 dark:text-white">{{ $article->title }}</h1>
            <p class="text-sm text-gray-600 dark:text-gray-300 mb-6">
                Kategori: <span class="font-semibold">{{ $article->category->name }}</span>
            </p>
            <div class="text-gray-800 dark:text-gray-200 leading-relaxed">
                {!! nl2br(e($article->content)) !!}
            </div>
            <div class="mt-8">
                <a href="{{ route('articles.index') }}" class="text-blue-600 hover:underline">&larr; Kembali ke daftar artikel</a>
            </div>
        </div>
    </div>
</div>
@endsection
