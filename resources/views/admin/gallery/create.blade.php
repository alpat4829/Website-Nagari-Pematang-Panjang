@extends('layouts.admin')

@section('title', 'Upload Foto')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-900">Upload Foto ke Galeri</h2>
                <p class="text-gray-600">Tambahkan foto baru ke galeri nagari</p>
            </div>

            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="space-y-6">
                    <div>
                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul Foto *</label>
                        <input type="text" name="judul" id="judul"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('judul') border-red-300 @enderror"
                            value="{{ old('judul') }}" required>
                        @error('judul')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('deskripsi') border-red-300 @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Foto *</label>
                        <div
                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md hover:border-green-400 transition-colors">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                    viewBox="0 0 48 48">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="gambar"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500">
                                        <span>Upload foto</span>
                                        <input id="gambar" name="gambar" type="file" class="sr-only" accept="image/*"
                                            required>
                                    </label>
                                    <p class="pl-1">atau drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF hingga 2MB</p>
                            </div>
                        </div>
                        @error('gambar')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('admin.gallery.index') }}"
                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors">
                        Upload Foto
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Preview gambar sebelum upload
        document.getElementById('gambar').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Hapus preview lama jika ada
                    const existingPreview = document.querySelector('.image-preview');
                    if (existingPreview) {
                        existingPreview.remove();
                    }

                    // Buat preview baru
                    const preview = document.createElement('div');
                    preview.className = 'image-preview mt-4';
                    preview.innerHTML = `
                <img src="${e.target.result}" class="max-w-xs max-h-48 rounded-lg shadow-md mx-auto">
                <p class="text-sm text-gray-500 text-center mt-2">Preview foto</p>
            `;
                    document.querySelector('form').appendChild(preview);
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
