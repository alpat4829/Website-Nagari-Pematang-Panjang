{{--
    Page Header Component
    Usage: <x-page-header title="Judul Halaman" subtitle="Sub judul" image="images/foto.jpg" />
    Props:
      - title    : string (required)
      - subtitle : string (optional)
      - image    : string (optional, default = pemandangan-sawah-pematang.jpg)
--}}
@props([
    'title'    => 'Judul Halaman',
    'subtitle' => '',
    'image'    => 'images/pemandangan-sawah-pematang.jpg',
])

<section class="relative overflow-hidden" style="min-height: 320px; padding-top: 80px;">

    {{-- Background foto --}}
    <img src="{{ asset($image) }}"
        alt="{{ $title }}"
        class="absolute inset-0 w-full h-full object-cover object-center">

    {{-- Dark overlay: seperti CTA section, gelap merata + sedikit gradien bawah --}}
    <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(4,20,10,0.78) 0%, rgba(4,30,15,0.65) 100%);"></div>

    {{-- Dekorasi: garis horizontal tipis di atas --}}
    <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-transparent via-green-400/50 to-transparent"></div>

    {{-- Content --}}
    <div class="relative flex flex-col items-center justify-center text-center px-6 py-16">

        {{-- Label atas —  breadcrumb style --}}
        <div class="flex items-center gap-3 mb-5">
            <div class="w-8 h-px bg-white/30"></div>
            <a href="{{ route('home') }}" class="text-white/50 text-xs font-semibold uppercase tracking-widest hover:text-white/80 transition-colors">Beranda</a>
            <svg class="w-3 h-3 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-white/70 text-xs font-semibold uppercase tracking-widest">{{ $title }}</span>
            <div class="w-8 h-px bg-white/30"></div>
        </div>

        {{-- Judul utama --}}
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight tracking-tight">
            {{ $title }}
        </h1>

        {{-- Garis dekoratif --}}
        <div class="flex items-center gap-2 mb-4">
            <div class="w-12 h-0.5 bg-green-400/60 rounded-full"></div>
            <div class="w-2 h-2 rounded-full bg-green-400/80"></div>
            <div class="w-12 h-0.5 bg-green-400/60 rounded-full"></div>
        </div>

        {{-- Subtitle (jika ada) --}}
        @if($subtitle)
            <p class="text-white/70 text-base md:text-lg max-w-xl mx-auto leading-relaxed">
                {{ $subtitle }}
            </p>
        @endif

    </div>

    {{-- Dekorasi sudut kiri bawah --}}
    <div class="absolute bottom-0 left-0 right-0 h-8"
        style="background: linear-gradient(to top, rgba(249,250,251,1) 0%, transparent 100%);"></div>

</section>
