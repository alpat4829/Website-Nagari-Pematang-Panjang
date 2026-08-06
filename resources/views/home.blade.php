{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
{{-- Hero Section — Full screen, ala Pacific Theme --}}
<div class="relative w-full overflow-hidden" style="height: 100vh; min-height: 600px;">

    {{-- Background Image --}}
    <img src="{{ asset('images/pemandangan-pematang-panjang.jpg') }}"
        alt="Pemandangan Nagari Pematang Panjang"
        class="absolute inset-0 w-full h-full object-cover"
        style="filter: brightness(0.82);">

    {{-- Gradient overlay — gelap di kiri, lebih terang ke kanan ala Pacific --}}
    <div class="absolute inset-0" style="background: linear-gradient(to right, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.35) 60%, rgba(0,0,0,0.15) 100%);"></div>

    {{-- Content — posisi di tengah-bawah kiri ala Pacific --}}
    <div class="relative h-full flex flex-col justify-end pb-24 md:pb-28">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-16 w-full">

            {{-- Tulisan cursive kecil di atas (ala "Welcome to Pacific") --}}
            <p class="font-cursive text-3xl md:text-4xl text-amber-300 mb-2 leading-none"
               style="letter-spacing: 0.02em;">
                Selamat Datang di
            </p>

            {{-- Judul utama --}}
            <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight mb-5"
                style="text-shadow: 0 2px 20px rgba(0,0,0,0.3);">
                Nagari<br>
                <span class="text-green-300">Pematang Panjang</span>
            </h1>

            {{-- Deskripsi --}}
            <p class="text-white/80 text-lg md:text-xl mb-9 max-w-xl leading-relaxed">
                Dataran tinggi yang memanjang dengan keindahan alam yang menawan,
                di Kecamatan Sijunjung, Kabupaten Sijunjung, Sumatera Barat.
            </p>

            {{-- Tombol CTA --}}
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('informasi.profil') }}"
                    class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-500 text-white font-semibold px-7 py-3.5 rounded-lg transition-all duration-300 shadow-lg hover:shadow-green-500/30 hover:shadow-xl transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Tentang Nagari
                </a>
                <a href="{{ route('umkm.index') }}"
                    class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25 backdrop-blur-sm border border-white/40 text-white font-semibold px-7 py-3.5 rounded-lg transition-all duration-300 hover:shadow-lg transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Jelajahi UMKM
                </a>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1 text-white/60">
        <span class="text-xs tracking-widest uppercase">Scroll</span>
        <div class="w-px h-10 bg-white/40 animate-pulse"></div>
    </div>
</div>

{{-- ============================================================ --}}
{{-- Section: Sambutan Wali Nagari                                --}}
{{-- ============================================================ --}}
<section class="relative bg-white overflow-hidden py-20">

    {{-- Dekorasi background subtle --}}
    <div class="absolute top-0 right-0 w-96 h-96 bg-green-50 rounded-full -translate-y-1/2 translate-x-1/2 opacity-60 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-amber-50 rounded-full translate-y-1/2 -translate-x-1/2 opacity-70 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-6 sm:px-10 lg:px-16">

        {{-- Label kecil di atas --}}
        <div class="flex items-center gap-3 mb-10">
            <div class="w-10 h-px bg-green-600"></div>
            <span class="text-xs font-semibold text-green-700 uppercase tracking-widest">Pesan dari Pimpinan</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">

            {{-- ===== Kolom Kiri: Foto + Identitas ===== --}}
            <div class="lg:col-span-4 flex flex-col items-center lg:items-start">

                {{-- Frame foto dengan ornamen --}}
                <div class="relative mb-6">
                    {{-- Lingkaran dekorasi luar --}}
                    <div class="w-56 h-56 md:w-64 md:h-64 rounded-full border-4 border-green-200 p-1.5">
                        <div class="w-full h-full rounded-full border-4 border-amber-300/50 overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/walnag.png') }}"
                                alt="Wali Nagari Pematang Panjang — Mulyadi, S.Pd"
                                class="w-full h-full object-cover"
                                style="object-position: 50% 15%;">
                        </div>
                    </div>
                    {{-- Badge jabatan --}}
                    <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-green-700 text-white text-xs font-semibold px-4 py-1.5 rounded-full shadow-lg whitespace-nowrap">
                        Wali Nagari
                    </div>
                </div>

                {{-- Nama --}}
                <div class="text-center lg:text-left mt-5">
                    <p class="font-cursive text-2xl text-green-700 leading-none mb-1">Mulyadi, S.Pd</p>
                    <p class="text-sm text-gray-500 tracking-wide">Wali Nagari Pematang Panjang</p>
                    <p class="text-xs text-gray-400 mt-0.5">Kec. Sijunjung, Kab. Sijunjung</p>

                    {{-- Tanda tangan visual --}}
                    <div class="mt-5 hidden lg:block">
                        <p class="font-cursive text-4xl text-gray-300 select-none" aria-hidden="true">Mulyadi</p>
                        <div class="w-28 h-px bg-gradient-to-r from-green-400 to-transparent mt-1"></div>
                    </div>
                </div>
            </div>

            {{-- ===== Kolom Kanan: Isi Sambutan ===== --}}
            <div class="lg:col-span-8">
                {{-- Judul sambutan --}}
                <p class="font-cursive text-2xl text-amber-500 mb-1 leading-none">Sambutan</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-snug">
                     <span class="text-green-700">Wali Nagari</span><br>
                    Pematang Panjang
                </h2>

                {{-- Garis pembatas --}}
                <div class="flex items-center gap-3 mb-7">
                    <div class="w-12 h-1 bg-green-600 rounded"></div>
                    <div class="w-4 h-1 bg-amber-400 rounded"></div>
                </div>

                {{-- Kutipan pembuka --}}
                <div class="relative pl-5 mb-6 border-l-4 border-green-200">
                    <svg class="absolute -top-2 -left-3 w-8 h-8 text-green-100" fill="currentColor" viewBox="0 0 24 24">
                        
                    </svg>
                    <p class="text-green-800 font-semibold text-lg italic leading-relaxed">
                    "Assalamualaikum Warahmatullahi Wabarakatuh."
                    </p>
                </div>

                {{-- Isi sambutan --}}
                <div class="space-y-4 text-gray-600 leading-relaxed text-base">
                    <p>
                        Puji syukur kehadirat Allah SWT atas segala limpahan rahmat dan karunia-Nya sehingga
                        website resmi <strong class="text-gray-800">Nagari Pematang Panjang</strong> ini dapat hadir
                        sebagai wujud komitmen kami dalam mewujudkan tata kelola pemerintahan nagari yang
                        <em>transparan, akuntabel, dan partisipatif</em>.
                    </p>
                    <p>
                        Melalui platform digital ini, kami berharap masyarakat Nagari Pematang Panjang dari
                        Jorong Koran hingga Jorong Pale dapat dengan mudah mengakses informasi
                        mengenai program kerja, kegiatan pembangunan, UMKM lokal, serta berbagai layanan
                        pemerintahan nagari.
                    </p>
                    <p>
                        Kami juga membuka ruang partisipasi aktif masyarakat melalui fitur pengaduan online.
                        Karena kemajuan Nagari Pematang Panjang adalah tanggung jawab kita bersama pemerintah
                        dan seluruh warga nagari.
                    </p>
                </div>

                {{-- Penutup & tanda tangan --}}
                <div class="mt-8 flex flex-col sm:flex-row sm:items-end gap-6">
                    <div>
                        <p class="text-gray-500 text-sm italic mb-3">
                            Wassalamualaikum Warahmatullahi Wabarakatuh.
                        </p>
                        <p class="font-cursive text-3xl text-green-700">Mulyadi, S.Pd</p>
                        <div class="w-32 h-0.5 bg-gradient-to-r from-green-500 to-transparent mt-1 mb-1"></div>
                        <p class="text-xs text-gray-400 font-medium uppercase tracking-widest">Wali Nagari Pematang Panjang</p>
                    </div>

                   
                </div>
            </div>

        </div>
    </div>
</section>

    {{-- ============================================================ --}}
    {{-- Section: Dataran Tinggi yang Memanjang (Redesign)           --}}
    {{-- ============================================================ --}}
    <section class="relative overflow-hidden" style="background-color: #f7f4ef;">

        {{-- Dekorasi garis organik SVG (background) --}}
        <div class="absolute inset-0 pointer-events-none opacity-20" aria-hidden="true">
            <svg class="absolute bottom-0 left-0 w-full" viewBox="0 0 1440 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100 Q360 0 720 100 Q1080 200 1440 100 L1440 200 L0 200 Z" fill="#16a34a" opacity="0.15"/>
            </svg>
        </div>

        <div class="relative grid grid-cols-1 lg:grid-cols-2 min-h-[520px]">

            {{-- ===== Kolom Kiri: Teks + Statistik ===== --}}
            <div class="flex flex-col justify-center px-8 sm:px-12 lg:px-16 py-16 lg:py-20">

                {{-- Label --}}
                <div class="flex items-center gap-3 mb-5">
                    <div class="w-8 h-px bg-amber-500"></div>
                    <span class="font-cursive text-xl text-amber-600">Keindahan Alam Nagari</span>
                </div>

                {{-- Judul --}}
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-5 leading-tight">
                    Dataran Tinggi<br>yang <span class="text-green-700">Memanjang</span>
                </h2>

                {{-- Garis --}}
                <div class="flex items-center gap-2 mb-6">
                    <div class="w-10 h-1 bg-green-700 rounded-full"></div>
                    <div class="w-3 h-1 bg-amber-400 rounded-full"></div>
                </div>

                {{-- Deskripsi --}}
                <p class="text-gray-600 leading-relaxed mb-10 max-w-md">
                    Nagari Pematang Panjang mendapat namanya dari kondisi geografis yang unik — sebuah dataran
                    tinggi yang memanjang seperti pematang sawah. Dikelilingi hamparan hijau perkebunan dan
                    persawahan, nagari ini menawarkan pemandangan yang memukau mata.
                </p>

                {{-- Statistik — 4 kartu organik tanpa icon AI --}}
                <div class="grid grid-cols-2 gap-4">

                    {{-- Stat 1: Luas Wilayah --}}
                    <div class="relative bg-white rounded-2xl px-5 py-4 shadow-sm border-b-4 border-green-600 hover:shadow-md transition-shadow duration-300">
                        <p class="text-2xl font-bold text-green-700 leading-none">2.775</p>
                        <p class="text-xs font-semibold text-green-600 uppercase tracking-wide">Hektare</p>
                        <p class="text-sm text-gray-500 mt-1">Luas Wilayah</p>
                        <div class="absolute top-3 right-4 text-green-200 font-black text-4xl leading-none select-none">ha</div>
                    </div>

                    {{-- Stat 2: Penduduk --}}
                    <div class="relative bg-white rounded-2xl px-5 py-4 shadow-sm border-b-4 border-amber-500 hover:shadow-md transition-shadow duration-300">
                        <p class="text-2xl font-bold text-amber-700 leading-none">6.938</p>
                        <p class="text-xs font-semibold text-amber-600 uppercase tracking-wide">Jiwa</p>
                        <p class="text-sm text-gray-500 mt-1">Penduduk</p>
                        <div class="absolute top-3 right-4 text-amber-100 font-black text-4xl leading-none select-none">±</div>
                    </div>

                    {{-- Stat 3: Jorong --}}
                    <div class="relative bg-white rounded-2xl px-5 py-4 shadow-sm border-b-4 border-stone-400 hover:shadow-md transition-shadow duration-300">
                        <p class="text-2xl font-bold text-stone-700 leading-none">11</p>
                        <p class="text-xs font-semibold text-stone-500 uppercase tracking-wide">Wilayah</p>
                        <p class="text-sm text-gray-500 mt-1">Jorong</p>
                        <div class="absolute top-3 right-4 text-stone-200 font-black text-4xl leading-none select-none">#</div>
                    </div>

                    {{-- Stat 4: Ketinggian --}}
                    <div class="relative bg-white rounded-2xl px-5 py-4 shadow-sm border-b-4 border-sky-500 hover:shadow-md transition-shadow duration-300">
                        <p class="text-2xl font-bold text-sky-700 leading-none">160</p>
                        <p class="text-xs font-semibold text-sky-600 uppercase tracking-wide">mdpl</p>
                        <p class="text-sm text-gray-500 mt-1">Ketinggian</p>
                        <div class="absolute top-3 right-4 text-sky-100 font-black text-4xl leading-none select-none">m</div>
                    </div>

                </div>

                {{-- Link explore --}}
                <div class="mt-8 flex items-center gap-3 text-sm text-gray-400">
                    <div class="w-6 h-px bg-gray-300"></div>
                    <span>Eksplorasi Warisan Pematang Panjang &nbsp;|&nbsp;</span>
                    <a href="{{ route('peta.index') }}" class="text-green-700 font-semibold hover:underline transition-colors">Kunjungi Peta →</a>
                </div>

            </div>

            {{-- ===== Kolom Kanan: Foto Full-bleed ===== --}}
            <div class="relative min-h-[400px] lg:min-h-0">
                {{-- Foto utama —  melebar ke tepi kanan --}}
                <img src="{{ asset('images/pemandangan-sawah-pematang.jpg') }}"
                    alt="Hamparan Sawah Pematang Panjang"
                    class="absolute inset-0 w-full h-full object-cover">

                {{-- Overlay gelap ringan di bawah untuk caption --}}
                <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(0,0,0,0.55) 0%, rgba(0,0,0,0.1) 50%, transparent 100%);"></div>

                {{-- Mask organik di sisi kiri (blend dengan background) --}}
                <div class="hidden lg:block absolute left-0 inset-y-0 w-20"
                    style="background: linear-gradient(to right, #f7f4ef 0%, transparent 100%);"></div>

                {{-- Caption bawah --}}
                <div class="absolute bottom-8 left-8 right-8 text-white">
                    <p class="font-cursive text-2xl text-amber-300 leading-none mb-1">Pematang Panjang</p>
                    <h3 class="text-lg font-bold mb-1">Hamparan Sawah Nagari</h3>
                    <p class="text-sm text-white/70">Keindahan alam yang menjadi ciri khas nagari</p>
                </div>

                {{-- Badge di pojok kanan atas --}}
                <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm text-green-800 text-xs font-semibold px-4 py-1.5 rounded-full shadow">
                    Sijunjung, Sumatera Barat
                </div>
            </div>

        </div>
    </section>



    <!-- Informasi Nagari Section (Redesigned matching Pacific Layout) -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- LEFT COLUMN: 2x2 Grid of Beautiful Photo Cards -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    
                    <!-- Card 1: Lokasi Strategis -->
                    <div class="group relative rounded-3xl overflow-hidden shadow-lg h-80 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                        <img src="{{ asset('images/images/lokasistrategis.jpg') }}" alt="Lokasi Strategis" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <!-- Color overlay (Teal/Blue) -->
                        <div class="absolute inset-0 bg-gradient-to-t from-teal-950/90 via-teal-900/40 to-transparent"></div>
                        <!-- Small Badge icon at top left (orange background like the reference) -->
                       
                        <!-- Content -->
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Lokasi Strategis</h3>
                            <p class="text-xs text-white/90 leading-relaxed transition-all duration-500 ease-in-out">
                                Terletak di lintasan strategis dengan akses mudah yang mendukung kemajuan mobilitas ekonomi warga.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2: Masyarakat Produktif -->
                    <div class="group relative rounded-3xl overflow-hidden shadow-lg h-80 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sm:translate-y-4">
                        <img src="{{ asset('images/images/masyarakatproduktif.png') }}" alt="Masyarakat Produktif" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <!-- Color overlay (Emerald/Green) -->
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/90 via-emerald-900/40 to-transparent"></div>
                       
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Masyarakat Produktif</h3>
                            <p class="text-xs text-white/90 leading-relaxed transition-all duration-500 ease-in-out">
                                Didukung oleh warga yang aktif, kreatif, serta inovatif dalam menggerakkan roda UMKM lokal.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3: Kekayaan Alam -->
                    <div class="group relative rounded-3xl overflow-hidden shadow-lg h-80 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                        <img src="{{ asset('images/images/kekayaanalam.jpg') }}" alt="Kekayaan Alam" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <!-- Color overlay (Amber/Gold) -->
                        <div class="absolute inset-0 bg-gradient-to-t from-amber-950/90 via-amber-900/40 to-transparent"></div>
                        
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Kekayaan Alam</h3>
                            <p class="text-xs text-white/90 leading-relaxed transition-all duration-500 ease-in-out">
                                Kesuburan lahan pertanian, udara segar, serta sumber daya alam melimpah yang terjaga kelestariannya.
                            </p>
                        </div>
                    </div>

                    <!-- Card 4: Kearifan Lokal -->
                    <div class="group relative rounded-3xl overflow-hidden shadow-lg h-80 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl sm:translate-y-4">
                        <img src="{{ asset('images/images/kearifanlokal.jpg') }}" alt="Kearifan Lokal" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <!-- Color overlay (Indigo/Blue) -->
                        <div class="absolute inset-0 bg-gradient-to-t from-indigo-950/90 via-indigo-950/40 to-transparent"></div>
                        
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <h3 class="text-xl font-bold mb-2">Kearifan Lokal</h3>
                            <p class="text-xs text-white/90 leading-relaxed transition-all duration-500 ease-in-out">
                                Memegang erat nilai kebersamaan adat Minang dalam harmoni kehidupan bertetangga dan bermasyarakat.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- RIGHT COLUMN: Text and Call-To-Action (aligns with Pacific layout) -->
                <div class="lg:col-span-5 flex flex-col justify-center mt-12 lg:mt-0">
                    {{-- Cursive text line --}}
                    <p class="font-cursive text-3xl text-amber-600 mb-2 leading-none">Mengapa Pematang Panjang?</p>
                    
                    {{-- Main Header --}}
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                        Potensi Unggul &amp;<br>
                        Harmoni <span class="text-green-700">Masyarakat</span>
                    </h2>

                    {{-- Paragraphs --}}
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Nagari Pematang Panjang bukan sekadar hamparan wilayah administratif. Ini adalah tanah ulayat nan subur di mana karunia alam berpadu selaras dengan keguyuban warganya yang dinamis.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Dengan kekayaan sektor pertanian, geliat UMKM mandiri, dan komitmen pelayanan prima, kami terus berupaya membangun kemajuan nagari tanpa menepikan akar budaya adat istiadat yang luhur.
                    </p>

                    {{-- Button CTA --}}
                    <div>
                        <a href="{{ route('informasi.profil') }}"
                           class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-600 text-white font-semibold px-6 py-3 rounded-2xl transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                            Pelajari Selengkapnya
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Galeri Section -->
    @if ($galleries->count() > 0)
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-12">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Galeri Foto</h2>
                        <p class="text-lg text-gray-600">Dokumentasi kegiatan dan keindahan Nagari Pematang Panjang</p>
                    </div>
                    <a href="{{ route('gallery.index') }}"
                        class="text-green-600 hover:text-green-700 font-semibold flex items-center group">
                        Lihat Semua
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($galleries as $gallery)
                        <div
                            class="relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group">
                            <img src="{{ Storage::url($gallery->gambar) }}" alt="{{ $gallery->judul }}"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-semibold text-lg mb-1">{{ $gallery->judul }}</h3>
                                @if ($gallery->deskripsi)
                                    <p class="text-sm opacity-90">{{ Str::limit($gallery->deskripsi, 60) }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <!-- UMKM Section -->
    @if ($umkms->count() > 0)
        <div class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-12">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">UMKM Unggulan</h2>
                        <p class="text-lg text-gray-600">Usaha Mikro Kecil Menengah yang menjadi kebanggaan nagari</p>
                    </div>
                    <a href="{{ route('umkm.index') }}"
                        class="text-green-600 hover:text-green-700 font-semibold flex items-center group">
                        Lihat Semua UMKM
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($umkms as $umkm)
                        <div
                            class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border hover:-translate-y-2 group">
                            @if ($umkm->gambar)
                                <div class="relative overflow-hidden rounded-t-xl">
                                    <img src="{{ Storage::url($umkm->gambar) }}" alt="{{ $umkm->nama }}"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                            @endif
                            <div class="p-6">
                                <h3
                                    class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-green-600 transition-colors">
                                    {{ $umkm->nama }}</h3>
                                <p class="text-gray-600 mb-4 line-clamp-2">{{ Str::limit($umkm->deskripsi, 100) }}</p>

                                <div class="flex justify-between items-center">
                                    <a href="{{ route('umkm.show', $umkm) }}"
                                        class="text-green-600 hover:text-green-700 font-semibold transition-colors">
                                        Lihat Detail →
                                    </a>
                                    <div class="flex space-x-2">
                                        @if ($umkm->whatsapp)
                                            <a href="https://wa.me/{{ $umkm->whatsapp }}" target="_blank"
                                                class="text-green-500 hover:text-green-600 transition-colors transform hover:scale-110">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                                </svg>
                                            </a>
                                        @endif
                                        @if ($umkm->instagram)
                                            <a href="{{ $umkm->instagram }}" target="_blank"
                                                class="text-pink-500 hover:text-pink-600 transition-colors transform hover:scale-110">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <!-- Artikel & Berita Section -->
    @if ($articles->count() > 0)
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-12">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Artikel & Berita Terbaru</h2>
                        <p class="text-lg text-gray-600">Informasi terkini seputar kegiatan dan perkembangan nagari</p>
                    </div>
                    <a href="{{ route('articles.index') }}"
                        class="text-green-600 hover:text-green-700 font-semibold flex items-center group">
                        Lihat Semua
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($articles as $article)
                        <article class="group bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:-translate-y-1 overflow-hidden flex flex-col">
                            @if ($article->gambar)
                                <div class="relative overflow-hidden h-44 flex-shrink-0">
                                    <img src="{{ Storage::url($article->gambar) }}" alt="{{ $article->judul }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                    <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-green-800 px-2.5 py-0.5 rounded-full text-xs font-semibold uppercase tracking-wide">
                                        {{ $article->kategori }}
                                    </span>
                                </div>
                            @else
                                <div class="h-2 bg-gradient-to-r from-green-600 to-green-400 flex-shrink-0"></div>
                            @endif
                            <div class="p-5 flex flex-col flex-1">
                                <time class="text-xs text-gray-400 mb-2 block">{{ $article->created_at->diffForHumans() }}</time>
                                <h3 class="text-base font-bold text-gray-900 mb-2 line-clamp-2 group-hover:text-green-700 transition-colors leading-snug">
                                    <a href="{{ route('articles.show', $article->slug) }}">{{ $article->judul }}</a>
                                </h3>
                                <p class="text-gray-500 text-sm line-clamp-2 mb-4 flex-1">
                                    {{ Str::limit(strip_tags($article->konten), 90) }}
                                </p>
                                <a href="{{ route('articles.show', $article->slug) }}"
                                    class="inline-flex items-center gap-1 text-green-700 hover:text-green-900 text-sm font-semibold transition-colors">
                                    Baca Selengkapnya
                                    <svg class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    {{-- ============================================================ --}}
    {{-- Section: Pengaduan Masyarakat (Redesigned)                  --}}
    {{-- ============================================================ --}}
    <section class="relative overflow-hidden py-20" style="background-color: #f0f4f0;">

        {{-- Background subtle texture --}}
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute top-0 right-0 w-80 h-80 bg-green-100 rounded-full -translate-y-1/2 translate-x-1/3 opacity-50"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-green-200 rounded-full translate-y-1/2 -translate-x-1/3 opacity-30"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 sm:px-10 lg:px-16">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                {{-- ===== Kolom Kiri: Konten Teks ===== --}}
                <div class="lg:col-span-5">

                    {{-- Label --}}
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-8 h-px bg-green-600"></div>
                        <span class="font-cursive text-xl text-green-700">Suara Anda, Kami Dengar</span>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-5 leading-tight">
                        Layanan Pengaduan<br><span class="text-green-700">Masyarakat</span>
                    </h2>

                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-10 h-1 bg-green-700 rounded-full"></div>
                        <div class="w-3 h-1 bg-green-400 rounded-full"></div>
                    </div>

                    <p class="text-gray-600 leading-relaxed mb-8 text-base">
                        Sampaikan pengaduan, saran, atau aspirasi Anda kepada pemerintah Nagari Pematang Panjang.
                        Kami siap mendengar dan menindaklanjuti setiap laporan dengan serius.
                    </p>

                    {{-- Feature list --}}
                    <div class="space-y-4 mb-10">
                        <div class="flex items-start gap-4">
                            <div class="w-9 h-9 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Anonim & Aman</p>
                                <p class="text-gray-500 text-xs mt-0.5">Pengaduan dapat disampaikan tanpa mencantumkan identitas diri</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-9 h-9 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Lampirkan Foto Bukti</p>
                                <p class="text-gray-500 text-xs mt-0.5">Dukung laporan Anda dengan dokumentasi foto hingga 2MB</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-9 h-9 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">Pantau via Nomor Tiket</p>
                                <p class="text-gray-500 text-xs mt-0.5">Setiap pengaduan mendapat nomor tiket unik untuk pemantauan</p>
                            </div>
                        </div>
                    </div>

                    {{-- CTA Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('pengaduan.index') }}"
                            class="inline-flex items-center justify-center gap-2 bg-green-700 hover:bg-green-600 text-white px-6 py-3 rounded-2xl font-semibold transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                            </svg>
                            Buat Pengaduan
                        </a>
                        <a href="{{ route('pengaduan.cek') }}"
                            class="inline-flex items-center justify-center gap-2 bg-white hover:bg-green-50 border border-green-200 hover:border-green-400 text-green-800 px-6 py-3 rounded-2xl font-semibold transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            Cek Status Tiket
                        </a>
                    </div>

                </div>

                {{-- ===== Kolom Kanan: Grid Kategori Visual ===== --}}
                <div class="lg:col-span-7">

                    {{-- Foto utama dengan overlay modern --}}
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl" style="min-height: 480px;">

                        {{-- Foto --}}
                        <img src="{{ asset('images/images/kadu.png') }}"
                            alt="Pengaduan Masyarakat Nagari Pematang Panjang"
                            class="absolute inset-0 w-full h-full object-cover">

                        {{-- Gradient overlay dari bawah --}}
                        <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(5,46,22,0.88) 0%, rgba(5,46,22,0.3) 30%, transparent 100%);"></div>

                        {{-- Badge pojok kiri atas --}}
                        <div class="absolute top-5 left-5">
                            
                        </div>

                        {{-- Konten bawah --}}
                        <div class="absolute bottom-0 left-0 right-0 p-7">
                            <p class="font-cursive text-2xl text-green-300 mb-1 leading-none">Suara Anda</p>
                            <h3 class="text-white text-xl font-bold mb-3 leading-snug">
                                Wujudkan Nagari yang <br>Responsif &amp; Transparan
                            </h3>

                            {{-- Stat row --}}
                            <div class="flex items-center gap-5 pt-4 border-t border-white/20">
                                <div>
                                    <p class="text-white font-bold text-lg leading-none">Anonim</p>
                                    <p class="text-white/60 text-xs mt-0.5">Identitas Aman</p>
                                </div>
                                <div class="w-px h-8 bg-white/20"></div>
                                <div>
                                    <p class="text-white font-bold text-lg leading-none">1×24 Jam</p>
                                    <p class="text-white/60 text-xs mt-0.5">Waktu Respons</p>
                                </div>
                                <div class="w-px h-8 bg-white/20"></div>
                                <div>
                                    <p class="text-white font-bold text-lg leading-none">Foto</p>
                                    <p class="text-white/60 text-xs mt-0.5">Bukti Dilampirkan</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- Call to Action Section — Photo BG Version                   --}}
    {{-- ============================================================ --}}
    <section class="relative overflow-hidden" style="min-height: 380px;">

        {{-- Background foto --}}
        <img src="{{ asset('images/images/kekayaanalam.jpg') }}"
            alt="Kekayaan Alam Nagari Pematang Panjang"
            class="absolute inset-0 w-full h-full object-cover object-center">

        {{-- Dark overlay — seperti referensi: gelap merata --}}
        <div class="absolute inset-0" style="background: rgba(5, 20, 10, 0.72);"></div>

        {{-- Content --}}
        <div class="relative flex flex-col items-center justify-center text-center px-6 py-24">

            {{-- Label kecil uppercase --}}
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-px bg-white/40"></div>
                <span class="text-xs font-semibold tracking-[0.3em] text-white/60 uppercase">Nagari Pematang Panjang</span>
                <div class="w-10 h-px bg-white/40"></div>
            </div>

            {{-- Judul utama --}}
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-5 leading-tight tracking-tight">
                Jelajahi Lebih Dalam
            </h2>

            {{-- Sub-teks --}}
            <p class="text-white/70 text-lg max-w-xl mx-auto mb-10 leading-relaxed">
                Temukan keunikan dan potensi Nagari Pematang Panjang melalui peta interaktif wilayah secara lengkap.
            </p>

            {{-- Satu tombol CTA saja --}}
            <a href="{{ route('peta.index') }}"
                class="inline-flex items-center gap-2.5 bg-white text-gray-900 hover:bg-green-50 px-8 py-3.5 rounded-2xl font-bold text-sm tracking-wide transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                <svg class="w-4 h-4 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Lihat Peta Interaktif
            </a>

        </div>

    </section>
@endsection
