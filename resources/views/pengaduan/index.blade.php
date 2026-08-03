{{-- resources/views/pengaduan/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Pengaduan Masyarakat')

@section('content')
    {{-- Hero Section --}}
    <div class="bg-gradient-to-r from-orange-500 to-orange-700 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Pengaduan <span class="text-yellow-300">Masyarakat</span></h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">
                    
                </p>
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Info Card --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-10">
                <div class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-orange-500 flex items-start gap-3">
                    <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 text-sm">Aman & Terjamin</h3>
                        <p class="text-gray-500 text-xs mt-1">Data Anda terlindungi dan dapat disampaikan secara anonim</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-blue-500 flex items-start gap-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 text-sm">Ditindaklanjuti</h3>
                        <p class="text-gray-500 text-xs mt-1">Setiap pengaduan akan diterima dan ditindaklanjuti admin</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-green-500 flex items-start gap-3">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800 text-sm">Cek Status</h3>
                        <p class="text-gray-500 text-xs mt-1">Pantau perkembangan pengaduan via nomor tiket</p>
                    </div>
                </div>
            </div>

            {{-- Form Card --}}
            <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-8 py-5">
                    <h2 class="text-xl font-bold text-white">Form Pengaduan</h2>
                    <p class="text-orange-100 text-sm mt-1">Kolom bertanda <span class="text-yellow-300 font-semibold">*</span> wajib diisi</p>
                </div>

                <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
                    @csrf

                    {{-- Validasi errors global --}}
                    @if ($errors->any())
                        <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <h3 class="font-semibold text-red-700">Mohon perbaiki kesalahan berikut:</h3>
                            </div>
                            <ul class="list-disc list-inside text-red-600 text-sm space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Bagian 1: Identitas Pelapor --}}
                    <div>
                        <h3 class="text-base font-semibold text-gray-700 mb-4 pb-2 border-b border-gray-200 flex items-center gap-2">
                            <span class="w-6 h-6 bg-orange-100 text-orange-600 rounded-full text-xs flex items-center justify-center font-bold">1</span>
                            Identitas Pelapor <span class="text-sm text-gray-400 font-normal">(opsional — boleh anonim)</span>
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="nama_pelapor" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="nama_pelapor" name="nama_pelapor"
                                    value="{{ old('nama_pelapor') }}"
                                    placeholder="Kosongkan jika ingin anonim"
                                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 outline-none transition text-sm @error('nama_pelapor') border-red-400 @enderror">
                            </div>
                            <div>
                                <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-1">No. HP / WhatsApp</label>
                                <input type="tel" id="no_hp" name="no_hp"
                                    value="{{ old('no_hp') }}"
                                    placeholder="Contoh: 08123456789"
                                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 outline-none transition text-sm @error('no_hp') border-red-400 @enderror">
                            </div>
                            <div class="md:col-span-2">
                                <label for="alamat_jorong" class="block text-sm font-medium text-gray-700 mb-1">
                                    Asal Jorong <span class="text-red-500">*</span>
                                </label>
                                <select id="alamat_jorong" name="alamat_jorong"
                                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 outline-none transition text-sm @error('alamat_jorong') border-red-400 @enderror">
                                    <option value="">-- Pilih Jorong --</option>
                                    <option value="Jorong Koto" {{ old('alamat_jorong') == 'Jorong Koto' ? 'selected' : '' }}>Jorong Koto</option>
                                    <option value="Jorong Pematang" {{ old('alamat_jorong') == 'Jorong Pematang' ? 'selected' : '' }}>Jorong Pematang</option>
                                    <option value="Jorong Kabun" {{ old('alamat_jorong') == 'Jorong Kabun' ? 'selected' : '' }}>Jorong Kabun</option>
                                    <option value="Jorong Pintu Rayo" {{ old('alamat_jorong') == 'Jorong Pintu Rayo' ? 'selected' : '' }}>Jorong Pintu Rayo</option>
                                    <option value="Jorong Koto Panjang" {{ old('alamat_jorong') == 'Jorong Koto Panjang' ? 'selected' : '' }}>Jorong Koto Panjang</option>
                                    <option value="Jorong Bukit Gombak" {{ old('alamat_jorong') == 'Jorong Bukit Gombak' ? 'selected' : '' }}>Jorong Bukit Gombak</option>
                                    <option value="Jorong Batu Manjulur" {{ old('alamat_jorong') == 'Jorong Batu Manjulur' ? 'selected' : '' }}>Jorong Batu Manjulur</option>
                                    <option value="Jorong Sungai Janiah" {{ old('alamat_jorong') == 'Jorong Sungai Janiah' ? 'selected' : '' }}>Jorong Sungai Janiah</option>
                                    <option value="Luar Nagari" {{ old('alamat_jorong') == 'Luar Nagari' ? 'selected' : '' }}>Luar Nagari</option>
                                </select>
                                @error('alamat_jorong')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Bagian 2: Detail Pengaduan --}}
                    <div>
                        <h3 class="text-base font-semibold text-gray-700 mb-4 pb-2 border-b border-gray-200 flex items-center gap-2">
                            <span class="w-6 h-6 bg-orange-100 text-orange-600 rounded-full text-xs flex items-center justify-center font-bold">2</span>
                            Detail Pengaduan
                        </h3>
                        <div class="space-y-5">
                            <div>
                                <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">
                                    Kategori Pengaduan <span class="text-red-500">*</span>
                                </label>
                                <select id="kategori" name="kategori"
                                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 outline-none transition text-sm @error('kategori') border-red-400 @enderror">
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="infrastruktur" {{ old('kategori') == 'infrastruktur' ? 'selected' : '' }}>🏗️ Infrastruktur (Jalan, Jembatan, dll)</option>
                                    <option value="pelayanan"     {{ old('kategori') == 'pelayanan'     ? 'selected' : '' }}>🏛️ Pelayanan Nagari</option>
                                    <option value="keamanan"      {{ old('kategori') == 'keamanan'      ? 'selected' : '' }}>🛡️ Keamanan & Ketertiban</option>
                                    <option value="lingkungan"    {{ old('kategori') == 'lingkungan'    ? 'selected' : '' }}>🌿 Lingkungan & Kebersihan</option>
                                    <option value="sosial"        {{ old('kategori') == 'sosial'        ? 'selected' : '' }}>👥 Sosial Kemasyarakatan</option>
                                    <option value="lainnya"       {{ old('kategori') == 'lainnya'       ? 'selected' : '' }}>📋 Lainnya</option>
                                </select>
                                @error('kategori')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">
                                    Judul Pengaduan <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="judul" name="judul"
                                    value="{{ old('judul') }}"
                                    placeholder="Ringkasan singkat pengaduan Anda (maks. 150 karakter)"
                                    maxlength="150"
                                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 outline-none transition text-sm @error('judul') border-red-400 @enderror">
                                @error('judul')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="isi_pengaduan" class="block text-sm font-medium text-gray-700 mb-1">
                                    Isi Pengaduan <span class="text-red-500">*</span>
                                </label>
                                <textarea id="isi_pengaduan" name="isi_pengaduan" rows="6"
                                    placeholder="Jelaskan pengaduan Anda secara detail. Sertakan lokasi, waktu kejadian, dan hal-hal yang perlu diperhatikan. (minimal 20 karakter)"
                                    class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 outline-none transition text-sm resize-none @error('isi_pengaduan') border-red-400 @enderror">{{ old('isi_pengaduan') }}</textarea>
                                @error('isi_pengaduan')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Bagian 3: Upload Foto --}}
                    <div>
                        <h3 class="text-base font-semibold text-gray-700 mb-4 pb-2 border-b border-gray-200 flex items-center gap-2">
                            <span class="w-6 h-6 bg-orange-100 text-orange-600 rounded-full text-xs flex items-center justify-center font-bold">3</span>
                            Foto Bukti <span class="text-sm text-gray-400 font-normal">(opsional)</span>
                        </h3>
                        <div>
                            <label for="foto" class="block text-sm font-medium text-gray-700 mb-2">
                                Upload Foto Pendukung
                            </label>
                            {{-- Dropzone area --}}
                            <div id="foto-dropzone"
                                class="border-2 border-dashed border-gray-300 rounded-xl p-8 text-center cursor-pointer hover:border-orange-400 hover:bg-orange-50 transition-all duration-200 @error('foto') border-red-400 @enderror"
                                onclick="document.getElementById('foto').click()">
                                <div id="foto-placeholder">
                                    <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <p class="text-sm text-gray-500">Klik untuk pilih foto atau <span class="text-orange-500 font-medium">drag & drop</span></p>
                                    <p class="text-xs text-gray-400 mt-1">PNG, JPG, JPEG — Maks. 2MB</p>
                                </div>
                                <div id="foto-preview" class="hidden">
                                    <img id="foto-preview-img" src="" alt="Preview" class="max-h-48 mx-auto rounded-lg shadow-md">
                                    <p id="foto-preview-name" class="text-sm text-gray-600 mt-2"></p>
                                    <button type="button" onclick="clearFoto(event)" class="text-red-500 text-xs mt-1 hover:underline">Hapus foto</button>
                                </div>
                            </div>
                            <input type="file" id="foto" name="foto" accept="image/jpg,image/jpeg,image/png" class="hidden">
                            @error('foto')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Persetujuan --}}
                    <div class="bg-gray-50 rounded-xl p-5 border border-gray-200">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" name="persetujuan" id="persetujuan" value="1"
                                class="mt-0.5 w-5 h-5 text-orange-500 border-gray-300 rounded focus:ring-orange-400 @error('persetujuan') border-red-400 @enderror"
                                {{ old('persetujuan') ? 'checked' : '' }}>
                            <span class="text-sm text-gray-700">
                                Saya menyatakan bahwa informasi yang saya sampaikan dalam pengaduan ini adalah
                                <strong>benar dan dapat dipertanggungjawabkan</strong>. Saya memahami bahwa
                                pengaduan palsu dapat merugikan pihak lain.
                            </span>
                        </label>
                        @error('persetujuan')
                            <p class="text-red-500 text-xs mt-2 ml-8">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <div class="flex flex-col sm:flex-row gap-3 pt-2">
                        <button type="submit"
                            class="flex-1 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-semibold py-3 px-8 rounded-xl transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Kirim Pengaduan
                        </button>
                        <a href="{{ route('pengaduan.cek') }}"
                            class="sm:w-auto border-2 border-orange-400 text-orange-600 font-semibold py-3 px-6 rounded-xl hover:bg-orange-50 transition-all duration-300 flex items-center justify-center gap-2 text-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                            Cek Status Tiket
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Preview foto sebelum upload
        const fotoInput = document.getElementById('foto');
        const fotoPlaceholder = document.getElementById('foto-placeholder');
        const fotoPreview = document.getElementById('foto-preview');
        const fotoPreviewImg = document.getElementById('foto-preview-img');
        const fotoPreviewName = document.getElementById('foto-preview-name');

        fotoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                if (file.size > 2 * 1024 * 1024) {
                    alert('Ukuran foto maksimal 2MB!');
                    fotoInput.value = '';
                    return;
                }
                const reader = new FileReader();
                reader.onload = function(e) {
                    fotoPreviewImg.src = e.target.result;
                    fotoPreviewName.textContent = file.name;
                    fotoPlaceholder.classList.add('hidden');
                    fotoPreview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        });

        function clearFoto(event) {
            event.stopPropagation();
            fotoInput.value = '';
            fotoPlaceholder.classList.remove('hidden');
            fotoPreview.classList.add('hidden');
        }

        // Drag & drop support
        const dropzone = document.getElementById('foto-dropzone');
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('border-orange-400', 'bg-orange-50');
        });
        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('border-orange-400', 'bg-orange-50');
        });
        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('border-orange-400', 'bg-orange-50');
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fotoInput.files = files;
                fotoInput.dispatchEvent(new Event('change'));
            }
        });
    </script>
@endsection
