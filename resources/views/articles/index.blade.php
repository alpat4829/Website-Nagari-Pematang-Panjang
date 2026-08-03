{{-- resources/views/articles/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Artikel & Berita')

@section('content')
    <div class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Artikel & Berita</h1>
                <p class="text-xl opacity-90">Informasi Terkini Seputar Nagari Pematang Panjang</p>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if ($articles->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($articles as $article)
                        <article class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow">
                            @if ($article->gambar)
                                <img src="{{ Storage::url($article->gambar) }}" alt="{{ $article->judul }}"
                                    class="w-full h-48 object-cover rounded-t-lg">
                            @else
                                <div class="w-full h-48 bg-gray-200 rounded-t-lg flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                            @endif
                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <span
                                        class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium uppercase mr-2">
                                        {{ $article->kategori }}
                                    </span>
                                    <time>{{ $article->created_at->diffForHumans() }}</time>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                                    <a href="{{ route('articles.show', $article->slug) }}" class="hover:text-green-600">
                                        {{ $article->judul }}
                                    </a>
                                </h3>
                                <p class="text-gray-600 line-clamp-3 mb-4">
                                    {{ Str::limit(strip_tags($article->konten), 150) }}
                                </p>
                                <a href="{{ route('articles.show', $article->slug) }}"
                                    class="text-green-600 hover:text-green-700 font-semibold inline-flex items-center">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $articles->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Artikel</h3>
                    <p class="text-gray-600">Artikel dan berita akan segera ditambahkan.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
