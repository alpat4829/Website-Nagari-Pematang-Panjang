@extends('layouts.admin')

@section('title', 'Tulis Artikel')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-900">Tulis Artikel Baru</h2>
                <p class="text-gray-600">Buat artikel atau berita untuk website nagari</p>
            </div>

            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="space-y-6">
                    <div>
                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul *</label>
                        <input type="text" name="judul" id="judul"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('judul') border-red-300 @enderror"
                            value="{{ old('judul') }}" required>
                        @error('judul')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori *</label>
                            <select name="kategori" id="kategori"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('kategori') border-red-300 @enderror"
                                required>
                                <option value="">Pilih Kategori</option>
                                <option value="artikel" {{ old('kategori') === 'artikel' ? 'selected' : '' }}>Artikel
                                </option>
                                <option value="berita" {{ old('kategori') === 'berita' ? 'selected' : '' }}>Berita</option>
                            </select>
                            @error('kategori')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                            <input type="file" name="gambar" id="gambar" accept="image/*"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('gambar') border-red-300 @enderror">
                            <p class="mt-1 text-sm text-gray-500">Format: JPG, PNG, GIF. Maksimal 2MB</p>
                            @error('gambar')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="konten" class="block text-sm font-medium text-gray-700">Konten *</label>
                        <textarea name="konten" id="konten" rows="12"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('konten') border-red-300 @enderror"
                            placeholder="Tulis konten artikel di sini..." required>{{ old('konten') }}</textarea>
                        @error('konten')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="is_published" id="is_published" value="1"
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                            {{ old('is_published', true) ? 'checked' : '' }}>
                        <label for="is_published" class="ml-2 block text-sm text-gray-900">Publikasikan artikel</label>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('admin.articles.index') }}"
                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors">
                        Simpan Artikel
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
