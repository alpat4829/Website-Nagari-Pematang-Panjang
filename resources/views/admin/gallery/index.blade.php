{{-- resources/views/admin/gallery/index.blade.php --}}
@extends('layouts.admin')

@section('title', 'Kelola Galeri')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-900">Galeri Foto</h2>
        <a href="{{ route('admin.gallery.create') }}"
            class="bg-green-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-700 transition-colors">
            Upload Foto
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        @if ($galleries->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-6">
                @foreach ($galleries as $gallery)
                    <div class="relative group">
                        <div class="aspect-square overflow-hidden rounded-lg">
                            <img src="{{ Storage::url($gallery->gambar) }}" alt="{{ $gallery->judul }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300 rounded-lg flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex space-x-2">
                                <a href="{{ route('admin.gallery.show', $gallery) }}"
                                    class="bg-white text-gray-900 p-2 rounded-full hover:bg-gray-100">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="{{ route('admin.gallery.edit', $gallery) }}"
                                    class="bg-white text-gray-900 p-2 rounded-full hover:bg-gray-100">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </a>
                                <form action="{{ route('admin.gallery.destroy', $gallery) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-white text-red-600 p-2 rounded-full hover:bg-gray-100"
                                        onclick="return confirm('Yakin ingin menghapus foto ini?')">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h3 class="text-sm font-medium text-gray-900 truncate">{{ $gallery->judul }}</h3>
                            <p class="text-xs text-gray-500">{{ $gallery->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            @if ($galleries->hasPages())
                <div class="px-6 py-4 border-t border-gray-200">
                    {{ $galleries->links() }}
                </div>
            @endif
        @else
            <div class="text-center py-16">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                    </path>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada foto</h3>
                <p class="text-gray-600 mb-4">Mulai dengan mengupload foto pertama ke galeri</p>
                <a href="{{ route('admin.gallery.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Upload Foto
                </a>
            </div>
        @endif
    </div>
@endsection
