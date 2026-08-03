{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 mr-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-600">Total UMKM</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['umkm_count'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 mr-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-600">UMKM Aktif</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['active_umkm'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 mr-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Galeri</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['gallery_count'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 mr-4">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Artikel</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['article_count'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 border-l-4 {{ $stats['pengaduan_baru'] > 0 ? 'border-red-500' : 'border-orange-400' }}">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-orange-100 mr-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Pengaduan</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ $stats['pengaduan_count'] }}</p>
                    </div>
                </div>
                @if ($stats['pengaduan_baru'] > 0)
                    <div class="text-right">
                        <span class="bg-red-500 text-white text-xs font-bold px-2.5 py-1 rounded-full">
                            {{ $stats['pengaduan_baru'] }} baru
                        </span>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow p-6 mb-8">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Aksi Cepat</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="{{ route('admin.umkm.create') }}"
                class="flex items-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                <svg class="w-8 h-8 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
                <div>
                    <p class="font-medium text-blue-900">Tambah UMKM</p>
                    <p class="text-sm text-blue-700">Buat data UMKM baru</p>
                </div>
            </a>

            <a href="{{ route('admin.gallery.create') }}"
                class="flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                <svg class="w-8 h-8 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16"></path>
                </svg>
                <div>
                    <p class="font-medium text-green-900">Upload Foto</p>
                    <p class="text-sm text-green-700">Tambah ke galeri</p>
                </div>
            </a>

            <a href="{{ route('admin.articles.create') }}"
                class="flex items-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                <svg class="w-8 h-8 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                    </path>
                </svg>
                <div>
                    <p class="font-medium text-purple-900">Tulis Artikel</p>
                    <p class="text-sm text-purple-700">Buat artikel/berita</p>
                </div>
            </a>

            <a href="{{ route('home') }}" target="_blank"
                class="flex items-center p-4 bg-yellow-50 rounded-lg hover:bg-yellow-100 transition-colors">
                <svg class="w-8 h-8 text-yellow-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4"></path>
                </svg>
                <div>
                    <p class="font-medium text-yellow-900">Lihat Website</p>
                    <p class="text-sm text-yellow-700">Buka di tab baru</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Selamat Datang di Admin Panel</h3>
        <div class="bg-green-50 p-6 rounded-lg">
            <h4 class="font-medium text-green-900 mb-2">Sistem Manajemen Website Nagari Pematang Panjang</h4>
            <p class="text-sm text-green-700">
                Kelola konten website nagari dengan mudah melalui panel admin ini.
                Anda dapat menambah, mengubah, dan menghapus data UMKM, galeri foto, serta artikel & berita.
            </p>
        </div>
    </div>
@endsection
