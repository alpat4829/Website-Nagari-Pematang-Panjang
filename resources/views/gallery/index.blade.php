{{-- resources/views/gallery/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
    <div class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Galeri Foto</h1>
                <p class="text-xl opacity-90">Dokumentasi Kegiatan dan Keindahan Nagari Pematang Panjang</p>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if ($galleries->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach ($galleries as $gallery)
                        <div class="relative overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow group cursor-pointer"
                            onclick="openModal('{{ Storage::url($gallery->gambar) }}', '{{ $gallery->judul }}', '{{ $gallery->deskripsi }}')">
                            <img src="{{ Storage::url($gallery->gambar) }}" alt="{{ $gallery->judul }}"
                                class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-semibold text-lg mb-1">{{ $gallery->judul }}</h3>
                                @if ($gallery->deskripsi)
                                    <p class="text-sm opacity-90 line-clamp-2">{{ $gallery->deskripsi }}</p>
                                @endif
                            </div>
                            <div
                                class="absolute top-4 right-4 bg-white bg-opacity-20 backdrop-blur-sm rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $galleries->links() }}
                </div>
            @else
                <div class="text-center py-16">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Foto</h3>
                    <p class="text-gray-600">Galeri foto akan segera ditambahkan.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4">
        <div class="max-w-4xl w-full bg-white rounded-lg overflow-hidden">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 id="modalTitle" class="text-xl font-semibold text-gray-900"></h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="p-4">
                <img id="modalImage" src="" alt="" class="w-full h-auto rounded-lg">
                <p id="modalDescription" class="mt-4 text-gray-600"></p>
            </div>
        </div>
    </div>

    <script>
        function openModal(imageSrc, title, description) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalDescription').textContent = description || '';
            document.getElementById('imageModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('imageModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) closeModal();
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeModal();
        });
    </script>
@endsection
