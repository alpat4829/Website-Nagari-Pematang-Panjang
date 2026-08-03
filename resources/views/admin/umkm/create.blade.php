{{-- resources/views/admin/umkm/create.blade.php --}}
@extends('layouts.admin')

@section('title', 'Tambah UMKM')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-900">Tambah UMKM Baru</h2>
                <p class="text-gray-600">Lengkapi form di bawah untuk menambah data UMKM</p>
            </div>

            <form action="{{ route('admin.umkm.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="space-y-6">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama UMKM *</label>
                        <input type="text" name="nama" id="nama"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('nama') border-red-300 @enderror"
                            value="{{ old('nama') }}" required>
                        @error('nama')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi *</label>
                        <textarea name="deskripsi" id="deskripsi" rows="4"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('deskripsi') border-red-300 @enderror"
                            required>{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
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

                    <div>
                        <label for="whatsapp" class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
                        <input type="text" name="whatsapp" id="whatsapp" placeholder="628123456789"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('whatsapp') border-red-300 @enderror"
                            value="{{ old('whatsapp') }}">
                        <p class="mt-1 text-sm text-gray-500">Format: 628123456789 (tanpa tanda +)</p>
                        @error('whatsapp')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="instagram" class="block text-sm font-medium text-gray-700">Link Instagram</label>
                        <input type="url" name="instagram" id="instagram" placeholder="https://instagram.com/username"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('instagram') border-red-300 @enderror"
                            value="{{ old('instagram') }}">
                        @error('instagram')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" id="is_active" value="1"
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                            {{ old('is_active', true) ? 'checked' : '' }}>
                        <label for="is_active" class="ml-2 block text-sm text-gray-900">UMKM Aktif</label>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('admin.umkm.index') }}"
                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

{{-- resources/views/admin/umkm/edit.blade.php --}}
@extends('layouts.admin')

@section('title', 'Edit UMKM')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-900">Edit UMKM: {{ $umkm->nama }}</h2>
                <p class="text-gray-600">Perbarui informasi UMKM</p>
            </div>

            <form action="{{ route('admin.umkm.update', $umkm) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama UMKM *</label>
                        <input type="text" name="nama" id="nama"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('nama') border-red-300 @enderror"
                            value="{{ old('nama', $umkm->nama) }}" required>
                        @error('nama')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi *</label>
                        <textarea name="deskripsi" id="deskripsi" rows="4"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('deskripsi') border-red-300 @enderror"
                            required>{{ old('deskripsi', $umkm->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                        @if ($umkm->gambar)
                            <div class="mt-1 mb-3">
                                <img src="{{ Storage::url($umkm->gambar) }}" alt="{{ $umkm->nama }}"
                                    class="h-20 w-20 object-cover rounded">
                                <p class="text-sm text-gray-500 mt-1">Gambar saat ini</p>
                            </div>
                        @endif
                        <input type="file" name="gambar" id="gambar" accept="image/*"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('gambar') border-red-300 @enderror">
                        <p class="mt-1 text-sm text-gray-500">Kosongkan jika tidak ingin mengubah gambar. Format: JPG, PNG,
                            GIF. Maksimal 2MB</p>
                        @error('gambar')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="whatsapp" class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
                        <input type="text" name="whatsapp" id="whatsapp" placeholder="628123456789"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('whatsapp') border-red-300 @enderror"
                            value="{{ old('whatsapp', $umkm->whatsapp) }}">
                        <p class="mt-1 text-sm text-gray-500">Format: 628123456789 (tanpa tanda +)</p>
                        @error('whatsapp')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="instagram" class="block text-sm font-medium text-gray-700">Link Instagram</label>
                        <input type="url" name="instagram" id="instagram"
                            placeholder="https://instagram.com/username"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('instagram') border-red-300 @enderror"
                            value="{{ old('instagram', $umkm->instagram) }}">
                        @error('instagram')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" id="is_active" value="1"
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                            {{ old('is_active', $umkm->is_active) ? 'checked' : '' }}>
                        <label for="is_active" class="ml-2 block text-sm text-gray-900">UMKM Aktif</label>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('admin.umkm.index') }}"
                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
