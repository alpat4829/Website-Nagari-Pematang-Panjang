{{-- resources/views/pengaduan/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Pengaduan Masyarakat')

@section('content')

    {{-- ═══════════════════════════════════════════════════════════ --}}
    {{-- Page Header                                                 --}}
    {{-- ═══════════════════════════════════════════════════════════ --}}
    <x-page-header
        title="Pengaduan Masyarakat"
        subtitle="Sampaikan aspirasi dan pengaduan Anda — kami siap mendengar dan menindaklanjuti"
        image="images/images/pengaduanmasyarakat.png"
    />

    {{-- ═══════════════════════════════════════════════════════════ --}}
    {{-- Main Body                                                   --}}
    {{-- ═══════════════════════════════════════════════════════════ --}}
    <div class="bg-gray-50 py-14">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- ── Info Badges ── --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">
                @foreach ([
                    [
                        'icon'  => 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z',
                        'title' => 'Aman & Terjamin',
                        'desc'  => 'Data Anda terlindungi dan dapat disampaikan secara anonim',
                        'color' => 'bg-green-50 border-green-200',
                        'icon_bg' => 'bg-green-100',
                        'icon_color' => 'text-green-700',
                        'bar'   => 'bg-green-600',
                    ],
                    [
                        'icon'  => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                        'title' => 'Ditindaklanjuti',
                        'desc'  => 'Setiap pengaduan akan diterima dan ditindaklanjuti admin nagari',
                        'color' => 'bg-blue-50 border-blue-200',
                        'icon_bg' => 'bg-blue-100',
                        'icon_color' => 'text-blue-700',
                        'bar'   => 'bg-blue-600',
                    ],
                    [
                        'icon'  => 'M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z',
                        'title' => 'Pantau Status',
                        'desc'  => 'Pantau perkembangan pengaduan Anda via nomor tiket unik',
                        'color' => 'bg-emerald-50 border-emerald-200',
                        'icon_bg' => 'bg-emerald-100',
                        'icon_color' => 'text-emerald-700',
                        'bar'   => 'bg-emerald-600',
                    ],
                ] as $badge)
                    <div class="bg-white rounded-2xl border {{ $badge['color'] }} p-5 flex items-start gap-4 shadow-sm">
                        <div class="w-10 h-10 {{ $badge['icon_bg'] }} rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 {{ $badge['icon_color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $badge['icon'] }}"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800 text-sm">{{ $badge['title'] }}</h3>
                            <p class="text-gray-500 text-xs mt-1 leading-relaxed">{{ $badge['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- ── Form Card ── --}}
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">

                {{-- Form Header --}}
                <div class="bg-gradient-to-r from-green-700 to-green-600 px-8 py-6">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-white">Form Pengaduan Masyarakat</h2>
                            <p class="text-green-200 text-xs mt-0.5">Kolom bertanda <span class="text-white font-semibold">*</span> wajib diisi</p>
                        </div>
                    </div>
                </div>

                <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-8">
                    @csrf

                    {{-- Global Error --}}
                    @if ($errors->any())
                        <div class="bg-red-50 border border-red-200 rounded-2xl p-5">
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <h3 class="font-semibold text-red-700 text-sm">Mohon perbaiki kesalahan berikut:</h3>
                            </div>
                            <ul class="list-disc list-inside text-red-600 text-xs space-y-1 ml-7">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- ────────────────────────────────────── --}}
                    {{-- Bagian 1: Identitas Pelapor            --}}
                    {{-- ────────────────────────────────────── --}}
                    <div>
                        <div class="flex items-center gap-3 mb-5">
                            <span class="w-7 h-7 bg-green-700 text-white rounded-full text-xs flex items-center justify-center font-bold flex-shrink-0">1</span>
                            <div>
                                <h3 class="text-sm font-bold text-gray-800">Identitas Pelapor</h3>
                                <p class="text-xs text-gray-400">Opsional — boleh dikosongkan untuk pengaduan anonim</p>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 space-y-5">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                {{-- Nama --}}
                                <div>
                                    <label for="nama_pelapor" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">Nama Lengkap</label>
                                    <input type="text" id="nama_pelapor" name="nama_pelapor"
                                        value="{{ old('nama_pelapor') }}"
                                        placeholder="Kosongkan jika ingin anonim"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition text-sm placeholder-gray-400 @error('nama_pelapor') border-red-400 @enderror">
                                </div>
                                {{-- No HP --}}
                                <div>
                                    <label for="no_hp" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">No. HP / WhatsApp</label>
                                    <input type="tel" id="no_hp" name="no_hp"
                                        value="{{ old('no_hp') }}"
                                        placeholder="Contoh: 08123456789"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition text-sm placeholder-gray-400 @error('no_hp') border-red-400 @enderror">
                                </div>
                            </div>

                            {{-- Asal Jorong --}}
                            <div>
                                <label for="alamat_jorong" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
                                    Asal Jorong <span class="text-red-500 normal-case font-normal">*wajib</span>
                                </label>
                                <div class="relative">
                                    <select id="alamat_jorong" name="alamat_jorong"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition text-sm appearance-none cursor-pointer @error('alamat_jorong') border-red-400 @enderror">
                                        <option value="">Pilih jorong asal Anda...</option>
                                        @foreach ([
                                            'Jorong Koran',
                                            'Jorong Kambuik Koman',
                                            'Jorong Koto Tangah',
                                            'Jorong Parak Gadang',
                                            'Jorong Pale',
                                            'Jorong Duri',
                                            'Jorong Pondok Jago',
                                            'Jorong Kalumpang',
                                            'Jorong Koman Kacik',
                                            'Jorong Limau Sundai',
                                            'Jorong Sitampung',
                                            'Luar Nagari',
                                        ] as $jorong)
                                            <option value="{{ $jorong }}" {{ old('alamat_jorong') == $jorong ? 'selected' : '' }}>
                                                {{ $jorong }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('alamat_jorong')
                                    <p class="text-red-500 text-xs mt-1.5 flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- ────────────────────────────────────── --}}
                    {{-- Bagian 2: Detail Pengaduan             --}}
                    {{-- ────────────────────────────────────── --}}
                    <div>
                        <div class="flex items-center gap-3 mb-5">
                            <span class="w-7 h-7 bg-green-700 text-white rounded-full text-xs flex items-center justify-center font-bold flex-shrink-0">2</span>
                            <div>
                                <h3 class="text-sm font-bold text-gray-800">Detail Pengaduan</h3>
                                <p class="text-xs text-gray-400">Jelaskan permasalahan secara detail</p>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 space-y-5">

                            {{-- Kategori --}}
                            <div>
                                <label for="kategori" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
                                    Kategori Pengaduan <span class="text-red-500 normal-case font-normal">*wajib</span>
                                </label>
                                <div class="relative">
                                    <select id="kategori" name="kategori"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition text-sm appearance-none cursor-pointer @error('kategori') border-red-400 @enderror">
                                        <option value="">Pilih kategori pengaduan...</option>
                                        @foreach ([
                                            'infrastruktur' => 'Infrastruktur (Jalan, Jembatan, dll)',
                                            'pelayanan'     => 'Pelayanan Nagari',
                                            'keamanan'      => 'Keamanan & Ketertiban',
                                            'lingkungan'    => 'Lingkungan & Kebersihan',
                                            'sosial'        => 'Sosial Kemasyarakatan',
                                            'lainnya'       => 'Lainnya',
                                        ] as $val => $label)
                                            <option value="{{ $val }}" {{ old('kategori') == $val ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center">
                                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('kategori')
                                    <p class="text-red-500 text-xs mt-1.5 flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- Judul --}}
                            <div>
                                <label for="judul" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
                                    Judul Pengaduan <span class="text-red-500 normal-case font-normal">*wajib</span>
                                </label>
                                <input type="text" id="judul" name="judul"
                                    value="{{ old('judul') }}"
                                    placeholder="Ringkasan singkat pengaduan Anda (maks. 150 karakter)"
                                    maxlength="150"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition text-sm placeholder-gray-400 @error('judul') border-red-400 @enderror">
                                @error('judul')
                                    <p class="text-red-500 text-xs mt-1.5 flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- Isi Pengaduan --}}
                            <div>
                                <label for="isi_pengaduan" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
                                    Isi Pengaduan <span class="text-red-500 normal-case font-normal">*wajib</span>
                                </label>
                                <textarea id="isi_pengaduan" name="isi_pengaduan" rows="6"
                                    placeholder="Jelaskan pengaduan Anda secara detail. Sertakan lokasi, waktu kejadian, dan hal-hal yang perlu diperhatikan. (minimal 20 karakter)"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition text-sm resize-none placeholder-gray-400 @error('isi_pengaduan') border-red-400 @enderror">{{ old('isi_pengaduan') }}</textarea>
                                @error('isi_pengaduan')
                                    <p class="text-red-500 text-xs mt-1.5 flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- ────────────────────────────────────── --}}
                    {{-- Bagian 3: Upload Foto                  --}}
                    {{-- ────────────────────────────────────── --}}
                    <div>
                        <div class="flex items-center gap-3 mb-5">
                            <span class="w-7 h-7 bg-green-700 text-white rounded-full text-xs flex items-center justify-center font-bold flex-shrink-0">3</span>
                            <div>
                                <h3 class="text-sm font-bold text-gray-800">Foto Bukti</h3>
                                <p class="text-xs text-gray-400">Opsional — lampirkan foto pendukung pengaduan</p>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                            <div id="foto-dropzone"
                                class="border-2 border-dashed border-gray-200 rounded-2xl p-10 text-center cursor-pointer hover:border-green-400 hover:bg-green-50/50 transition-all duration-300 @error('foto') border-red-400 @enderror"
                                onclick="document.getElementById('foto').click()">
                                <div id="foto-placeholder">
                                    <div class="w-14 h-14 bg-gray-100 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                                        <svg class="w-7 h-7 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    <p class="text-sm text-gray-600 font-medium">Klik untuk memilih foto</p>
                                    <p class="text-xs text-gray-400 mt-1">atau drag & drop ke sini</p>
                                    <p class="text-xs text-gray-400 mt-2 bg-white border border-gray-100 rounded-full px-3 py-1 inline-block">PNG, JPG, JPEG — Maks. 2MB</p>
                                </div>
                                <div id="foto-preview" class="hidden">
                                    <img id="foto-preview-img" src="" alt="Preview" class="max-h-52 mx-auto rounded-xl shadow-md">
                                    <p id="foto-preview-name" class="text-sm text-gray-600 mt-3 font-medium"></p>
                                    <button type="button" onclick="clearFoto(event)"
                                        class="text-red-500 text-xs mt-2 hover:underline flex items-center gap-1 mx-auto">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                        Hapus foto
                                    </button>
                                </div>
                            </div>
                            <input type="file" id="foto" name="foto" accept="image/jpg,image/jpeg,image/png" class="hidden">
                            @error('foto')
                                <p class="text-red-500 text-xs mt-2 flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    {{-- ────────────────────────────────────── --}}
                    {{-- Persetujuan                            --}}
                    {{-- ────────────────────────────────────── --}}
                    <div class="bg-green-50 rounded-2xl p-5 border border-green-100">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <div class="relative flex-shrink-0 mt-0.5">
                                <input type="checkbox" name="persetujuan" id="persetujuan" value="1"
                                    class="w-5 h-5 text-green-600 border-gray-300 rounded focus:ring-green-500 cursor-pointer @error('persetujuan') border-red-400 @enderror"
                                    {{ old('persetujuan') ? 'checked' : '' }}>
                            </div>
                            <span class="text-sm text-gray-700 leading-relaxed">
                                Saya menyatakan bahwa informasi yang saya sampaikan dalam pengaduan ini adalah
                                <strong class="text-gray-900">benar dan dapat dipertanggungjawabkan</strong>. Saya memahami bahwa
                                pengaduan palsu dapat merugikan pihak lain.
                            </span>
                        </label>
                        @error('persetujuan')
                            <p class="text-red-500 text-xs mt-2 ml-8 flex items-center gap-1">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- ────────────────────────────────────── --}}
                    {{-- Tombol Submit                          --}}
                    {{-- ────────────────────────────────────── --}}
                    <div class="flex flex-col sm:flex-row gap-3 pt-2">
                        <button type="submit"
                            class="flex-1 bg-gradient-to-r from-green-700 to-green-600 hover:from-green-800 hover:to-green-700 text-white font-semibold py-3.5 px-8 rounded-xl transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Kirim Pengaduan
                        </button>
                        <a href="{{ route('pengaduan.cek') }}"
                            class="sm:w-auto border-2 border-green-600 text-green-700 font-semibold py-3.5 px-6 rounded-xl hover:bg-green-50 transition-all duration-300 flex items-center justify-center gap-2 text-center">
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
        // Preview foto
        const fotoInput       = document.getElementById('foto');
        const fotoPlaceholder = document.getElementById('foto-placeholder');
        const fotoPreview     = document.getElementById('foto-preview');
        const fotoPreviewImg  = document.getElementById('foto-preview-img');
        const fotoPreviewName = document.getElementById('foto-preview-name');

        fotoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;
            if (file.size > 2 * 1024 * 1024) {
                alert('Ukuran foto maksimal 2MB!');
                fotoInput.value = '';
                return;
            }
            const reader = new FileReader();
            reader.onload = function(e) {
                fotoPreviewImg.src       = e.target.result;
                fotoPreviewName.textContent = file.name;
                fotoPlaceholder.classList.add('hidden');
                fotoPreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        });

        function clearFoto(event) {
            event.stopPropagation();
            fotoInput.value = '';
            fotoPlaceholder.classList.remove('hidden');
            fotoPreview.classList.add('hidden');
        }

        // Drag & drop
        const dropzone = document.getElementById('foto-dropzone');
        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.classList.add('border-green-400', 'bg-green-50');
        });
        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('border-green-400', 'bg-green-50');
        });
        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.classList.remove('border-green-400', 'bg-green-50');
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fotoInput.files = files;
                fotoInput.dispatchEvent(new Event('change'));
            }
        });
    </script>
@endsection
