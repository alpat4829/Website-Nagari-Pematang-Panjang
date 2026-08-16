{{-- resources/views/kebudayaan/ninik-mamak.blade.php --}}
@extends('layouts.app')

@section('title', 'Profil Ninik Mamak')

@section('content')
<x-page-header
    title="Profil Ninik Mamak"
    subtitle="Tokoh adat dan pemangku adat Nagari Pematang Panjang, penjaga nilai-nilai luhur Minangkabau"
    image="images/images/lokasistrategis.jpg"
/>

<div class="bg-gray-50 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section intro --}}
        <div class="text-center mb-12">
            <p class="font-cursive text-green-600 text-lg mb-2">Adat Basandi Syarak, Syarak Basandi Kitabullah</p>
            <h2 class="text-3xl font-black text-gray-900 mb-4">Pemangku Adat Nagari Pematang Panjang</h2>
            <p class="text-gray-500 max-w-2xl mx-auto text-sm leading-relaxed">
                Ninik Mamak adalah pemimpin adat yang menjadi tonggak utama kehidupan masyarakat Minangkabau.
                Mereka menjaga, memelihara, dan menegakkan adat istiadat yang diwariskan secara turun-temurun.
            </p>
            {{-- Filter suku --}}
            <div class="flex flex-wrap gap-2 justify-center mt-6">
                <button onclick="filterSuku('semua')" id="btn-semua"
                    class="filter-btn active-filter px-4 py-1.5 rounded-full text-sm font-semibold transition-all duration-200 bg-green-600 text-white">
                    Semua Suku
                </button>
                @foreach(['MALAYU','CANIAGO','PATOPANG','PILIANG'] as $suku)
                <button onclick="filterSuku('{{ strtolower($suku) }}')" id="btn-{{ strtolower($suku) }}"
                    class="filter-btn px-4 py-1.5 rounded-full text-sm font-semibold transition-all duration-200 bg-white border border-gray-200 text-gray-600 hover:bg-amber-50 hover:border-amber-300 hover:text-amber-700">
                    Suku {{ ucfirst(strtolower($suku)) }}
                </button>
                @endforeach
            </div>
        </div>

        {{-- ══ SUKU MALAYU ══ --}}
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <div class="h-px bg-gradient-to-r from-transparent via-amber-300 to-transparent flex-1"></div>
                <div class="flex items-center gap-2 bg-amber-50 border border-amber-200 px-5 py-2 rounded-full">
                    <div class="w-2 h-2 bg-amber-500 rounded-full"></div>
                    <h3 class="text-amber-800 font-bold text-sm uppercase tracking-widest">Suku Malayu</h3>
                </div>
                <div class="h-px bg-gradient-to-r from-transparent via-amber-300 to-transparent flex-1"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 suku-group" data-suku="malayu">

                {{-- Jon Hendri --}}
                <div class="niniak-card bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="relative">
                        <div class="h-2 bg-gradient-to-r from-amber-400 to-amber-600"></div>
                        <div class="p-6 flex gap-5">
                            <div class="flex-shrink-0">
                                <div class="w-24 h-28 rounded-xl overflow-hidden ring-4 ring-amber-100 shadow-md">
                                    <img src="{{ asset('images/niniak/jon hendri.png') }}" alt="Jon Hendri"
                                        class="w-full h-full object-cover object-top">
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <span class="inline-block bg-amber-100 text-amber-700 text-xs font-bold px-2.5 py-0.5 rounded-full mb-2 uppercase tracking-wide">Panghulu • Ketua KAN</span>
                                <h4 class="text-gray-900 font-bold text-base leading-tight mb-0.5">Jon Hendri</h4>
                                <p class="text-amber-700 font-semibold text-sm italic mb-3">Datuak Panghulu Garang</p>
                                <div class="space-y-1 text-xs text-gray-500">
                                    <div class="flex gap-1.5 items-center">
                                        <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        Jorong Koran
                                    </div>
                                    <div class="flex gap-1.5 items-center">
                                        <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        Petani/Pekebun
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-5">
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Suku</p>
                                <p class="font-semibold text-gray-700">Malayu</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Dinobatkan</p>
                                <p class="font-semibold text-green-600">Sudah</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Pendidikan</p>
                                <p class="font-semibold text-gray-700">SLTA</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">No. HP</p>
                                <p class="font-semibold text-gray-700">0812-7014-7800</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Masrisal --}}
                <div class="niniak-card bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="relative">
                        <div class="h-2 bg-gradient-to-r from-amber-400 to-amber-600"></div>
                        <div class="p-6 flex gap-5">
                            <div class="flex-shrink-0">
                                <div class="w-24 h-28 rounded-xl overflow-hidden ring-4 ring-amber-100 shadow-md">
                                    <img src="{{ asset('images/niniak/masrial.png') }}" alt="Masrisal"
                                        class="w-full h-full object-cover object-top">
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <span class="inline-block bg-blue-100 text-blue-700 text-xs font-bold px-2.5 py-0.5 rounded-full mb-2 uppercase tracking-wide">Monti</span>
                                <h4 class="text-gray-900 font-bold text-base leading-tight mb-0.5">Masrisal</h4>
                                <p class="text-amber-700 font-semibold text-sm italic mb-3">Monti Besar</p>
                                <div class="space-y-1 text-xs text-gray-500">
                                    <div class="flex gap-1.5 items-center">
                                        <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        Jorong Limau Sundai
                                    </div>
                                    <div class="flex gap-1.5 items-center">
                                        <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        Petani/Pekebun
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-5">
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Suku</p>
                                <p class="font-semibold text-gray-700">Malayu</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Dinobatkan</p>
                                <p class="font-semibold text-green-600">Sudah</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Pendidikan</p>
                                <p class="font-semibold text-gray-700">SLTA</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">No. HP</p>
                                <p class="font-semibold text-gray-700">0813-7869-3124</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Asril (Malayu - Pandito Alam) --}}
                <div class="niniak-card bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="relative">
                        <div class="h-2 bg-gradient-to-r from-amber-400 to-amber-600"></div>
                        <div class="p-6 flex gap-5">
                            <div class="flex-shrink-0">
                                <div class="w-24 h-28 rounded-xl overflow-hidden ring-4 ring-amber-100 shadow-md">
                                    <img src="{{ asset('images/niniak/asril malayuu.png') }}" alt="Asril"
                                        class="w-full h-full object-cover object-top">
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <span class="inline-block bg-purple-100 text-purple-700 text-xs font-bold px-2.5 py-0.5 rounded-full mb-2 uppercase tracking-wide">Pandito</span>
                                <h4 class="text-gray-900 font-bold text-base leading-tight mb-0.5">Asril</h4>
                                <p class="text-amber-700 font-semibold text-sm italic mb-3">Pandito Alam</p>
                                <div class="space-y-1 text-xs text-gray-500">
                                    <div class="flex gap-1.5 items-center">
                                        <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        Jorong Pale
                                    </div>
                                    <div class="flex gap-1.5 items-center">
                                        <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        Petani/Pekebun
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-5">
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Suku</p>
                                <p class="font-semibold text-gray-700">Malayu</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Dinobatkan</p>
                                <p class="font-semibold text-green-600">Sudah</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Pendidikan</p>
                                <p class="font-semibold text-gray-700">SLTA</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">No. HP</p>
                                <p class="font-semibold text-gray-700">—</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Fauzen --}}
                <div class="niniak-card bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="relative">
                        <div class="h-2 bg-gradient-to-r from-amber-400 to-amber-600"></div>
                        <div class="p-6 flex gap-5">
                            <div class="flex-shrink-0">
                                <div class="w-24 h-28 rounded-xl overflow-hidden ring-4 ring-amber-100 shadow-md">
                                    <img src="{{ asset('images/niniak/fauzen.png') }}" alt="Fauzen"
                                        class="w-full h-full object-cover object-top">
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <span class="inline-block bg-orange-100 text-orange-700 text-xs font-bold px-2.5 py-0.5 rounded-full mb-2 uppercase tracking-wide">Pagawai/Dubalang</span>
                                <h4 class="text-gray-900 font-bold text-base leading-tight mb-0.5">Fauzen</h4>
                                <p class="text-amber-700 font-semibold text-sm italic mb-3">Pono Batuah — Sutan di Langik</p>
                                <div class="space-y-1 text-xs text-gray-500">
                                    <div class="flex gap-1.5 items-center">
                                        <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                        Jorong Koto Tangah
                                    </div>
                                    <div class="flex gap-1.5 items-center">
                                        <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        Petani/Pekebun
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-5">
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Suku</p>
                                <p class="font-semibold text-gray-700">Malayu</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Dinobatkan</p>
                                <p class="font-semibold text-orange-500">Belum</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">Pendidikan</p>
                                <p class="font-semibold text-gray-700">S1</p>
                            </div>
                            <div class="bg-gray-50 rounded-lg p-2.5">
                                <p class="text-gray-400 mb-0.5">No. HP</p>
                                <p class="font-semibold text-gray-700">0852-7445-3731</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- ══ SUKU CANIAGO ══ --}}
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <div class="h-px bg-gradient-to-r from-transparent via-green-300 to-transparent flex-1"></div>
                <div class="flex items-center gap-2 bg-green-50 border border-green-200 px-5 py-2 rounded-full">
                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    <h3 class="text-green-800 font-bold text-sm uppercase tracking-widest">Suku Caniago</h3>
                </div>
                <div class="h-px bg-gradient-to-r from-transparent via-green-300 to-transparent flex-1"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 suku-group" data-suku="caniago">

                {{-- April Marsal --}}
                @php $cards_caniago = [
                    ['april marsal', 'April Marsal', 'Datuak Panghulu Sati', 'Panghulu', 'Jorong Pale', 'S1', 'Anggota DPRD', 'Belum', '0823-8647-6121'],
                    ['asril caniago', 'Asril', 'Sandaro Nan Putiah', 'Monti', 'Jorong Koto Tangah', 'SLTA', 'Petani/Pekebun', 'Sudah', '—'],
                    ['ruhallah', 'Ruhallah', 'Pandito Jalelo', 'Pandito', 'Jorong Sitampung', 'SLTA', 'Petani/Pekebun', 'Sudah', '0852-7406-5282'],
                    ['sardiman edi', 'Sardiman Edi', 'Sutan Nan Gadang — Malin Mudo', 'Pagawai/Dubalang', 'Jorong Pondok Jago', 'SLTA', 'Petani/Pekebun', 'Belum', '0813-7411-7878'],
                ]; @endphp

                @foreach($cards_caniago as [$img, $nama, $gelar, $jabatan, $jorong, $pendidikan, $pekerjaan, $dinobatkan, $hp])
                <div class="niniak-card bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="h-2 bg-gradient-to-r from-green-500 to-emerald-600"></div>
                    <div class="p-6 flex gap-5">
                        <div class="flex-shrink-0">
                            <div class="w-24 h-28 rounded-xl overflow-hidden ring-4 ring-green-100 shadow-md">
                                <img src="{{ asset('images/niniak/' . $img . '.png') }}" alt="{{ $nama }}"
                                    class="w-full h-full object-cover object-top">
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="inline-block bg-green-100 text-green-700 text-xs font-bold px-2.5 py-0.5 rounded-full mb-2 uppercase tracking-wide">{{ $jabatan }}</span>
                            <h4 class="text-gray-900 font-bold text-base leading-tight mb-0.5">{{ $nama }}</h4>
                            <p class="text-green-700 font-semibold text-sm italic mb-3">{{ $gelar }}</p>
                            <div class="space-y-1 text-xs text-gray-500">
                                <div class="flex gap-1.5 items-center">
                                    <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    {{ $jorong }}
                                </div>
                                <div class="flex gap-1.5 items-center">
                                    <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    {{ $pekerjaan }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-5">
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">Suku</p><p class="font-semibold text-gray-700">Caniago</p></div>
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">Dinobatkan</p><p class="font-semibold {{ $dinobatkan === 'Sudah' ? 'text-green-600' : 'text-orange-500' }}">{{ $dinobatkan }}</p></div>
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">Pendidikan</p><p class="font-semibold text-gray-700">{{ $pendidikan }}</p></div>
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">No. HP</p><p class="font-semibold text-gray-700">{{ $hp }}</p></div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        {{-- ══ SUKU PATOPANG ══ --}}
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <div class="h-px bg-gradient-to-r from-transparent via-purple-300 to-transparent flex-1"></div>
                <div class="flex items-center gap-2 bg-purple-50 border border-purple-200 px-5 py-2 rounded-full">
                    <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                    <h3 class="text-purple-800 font-bold text-sm uppercase tracking-widest">Suku Patopang</h3>
                </div>
                <div class="h-px bg-gradient-to-r from-transparent via-purple-300 to-transparent flex-1"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 suku-group" data-suku="patopang">

                @php $cards_patopang = [
                    ['yoga sugama', 'Yoga Sugama', 'Datuak Panghulu Kayo', 'Panghulu', 'Jorong Parak Gadang', 'S1', 'Honorer', 'Belum', '0852-6357-5305'],
                    ['mustatir', 'Mustatir', 'Pandito Ibrahim', 'Pandito', 'Jorong Parak Gadang', 'S1', 'PNS', 'Belum', '—'],
                    ['dino eka putra', 'Dino Eka Putra', 'Rajo Bosa', 'Pagawai/Dubalang', 'Jorong Koran', 'SLTA', 'Petani/Pekebun', 'Belum', '0812-6821-9101'],
                    ['yuhadi', 'Yuhadi', 'Pono Kayo — Lintang Sati', 'Monti', 'Jorong Koman Kacik', 'SLTA', 'Petani/Pekebun', 'Belum', '0813-7226-1370'],
                ]; @endphp

                @foreach($cards_patopang as [$img, $nama, $gelar, $jabatan, $jorong, $pendidikan, $pekerjaan, $dinobatkan, $hp])
                <div class="niniak-card bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="h-2 bg-gradient-to-r from-purple-500 to-violet-600"></div>
                    <div class="p-6 flex gap-5">
                        <div class="flex-shrink-0">
                            <div class="w-24 h-28 rounded-xl overflow-hidden ring-4 ring-purple-100 shadow-md">
                                <img src="{{ asset('images/niniak/' . $img . '.png') }}" alt="{{ $nama }}"
                                    class="w-full h-full object-cover object-top">
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="inline-block bg-purple-100 text-purple-700 text-xs font-bold px-2.5 py-0.5 rounded-full mb-2 uppercase tracking-wide">{{ $jabatan }}</span>
                            <h4 class="text-gray-900 font-bold text-base leading-tight mb-0.5">{{ $nama }}</h4>
                            <p class="text-purple-700 font-semibold text-sm italic mb-3">{{ $gelar }}</p>
                            <div class="space-y-1 text-xs text-gray-500">
                                <div class="flex gap-1.5 items-center">
                                    <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    {{ $jorong }}
                                </div>
                                <div class="flex gap-1.5 items-center">
                                    <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    {{ $pekerjaan }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-5">
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">Suku</p><p class="font-semibold text-gray-700">Patopang</p></div>
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">Dinobatkan</p><p class="font-semibold {{ $dinobatkan === 'Sudah' ? 'text-green-600' : 'text-orange-500' }}">{{ $dinobatkan }}</p></div>
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">Pendidikan</p><p class="font-semibold text-gray-700">{{ $pendidikan }}</p></div>
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">No. HP</p><p class="font-semibold text-gray-700">{{ $hp }}</p></div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        {{-- ══ SUKU PILIANG ══ --}}
        <div class="mb-12">
            <div class="flex items-center gap-4 mb-6">
                <div class="h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent flex-1"></div>
                <div class="flex items-center gap-2 bg-blue-50 border border-blue-200 px-5 py-2 rounded-full">
                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                    <h3 class="text-blue-800 font-bold text-sm uppercase tracking-widest">Suku Piliang</h3>
                </div>
                <div class="h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent flex-1"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 suku-group" data-suku="piliang">

                @php $cards_piliang = [
                    ['julhaimi putra', 'Julhaimi Putra', 'Datuak Bandaro Kuniang', 'Panghulu', 'Jorong Koran', 'SMA', 'PNS', 'Belum', '0823-9216-7876'],
                    ['syahrul', 'Syahrul', 'Pandito Malin', 'Pandito', 'Jorong Duri', 'S1', 'Pensiunan', 'Belum', '62 813-7486-3480'],
                    ['riadhul fitri', 'Riadhul Fitri', 'Sari Marajo', 'Pagawai/Dubalang', 'Jorong Koto Tangah', 'SLTA', 'Pedagang', 'Sudah', '—'],
                ]; @endphp

                @foreach($cards_piliang as [$img, $nama, $gelar, $jabatan, $jorong, $pendidikan, $pekerjaan, $dinobatkan, $hp])
                <div class="niniak-card bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                    <div class="h-2 bg-gradient-to-r from-blue-500 to-sky-600"></div>
                    <div class="p-6 flex gap-5">
                        <div class="flex-shrink-0">
                            <div class="w-24 h-28 rounded-xl overflow-hidden ring-4 ring-blue-100 shadow-md">
                                <img src="{{ asset('images/niniak/' . $img . '.png') }}" alt="{{ $nama }}"
                                    class="w-full h-full object-cover object-top">
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="inline-block bg-blue-100 text-blue-700 text-xs font-bold px-2.5 py-0.5 rounded-full mb-2 uppercase tracking-wide">{{ $jabatan }}</span>
                            <h4 class="text-gray-900 font-bold text-base leading-tight mb-0.5">{{ $nama }}</h4>
                            <p class="text-blue-700 font-semibold text-sm italic mb-3">{{ $gelar }}</p>
                            <div class="space-y-1 text-xs text-gray-500">
                                <div class="flex gap-1.5 items-center">
                                    <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    {{ $jorong }}
                                </div>
                                <div class="flex gap-1.5 items-center">
                                    <svg class="w-3.5 h-3.5 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    {{ $pekerjaan }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-5">
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">Suku</p><p class="font-semibold text-gray-700">Piliang</p></div>
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">Dinobatkan</p><p class="font-semibold {{ $dinobatkan === 'Sudah' ? 'text-green-600' : 'text-orange-500' }}">{{ $dinobatkan }}</p></div>
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">Pendidikan</p><p class="font-semibold text-gray-700">{{ $pendidikan }}</p></div>
                            <div class="bg-gray-50 rounded-lg p-2.5"><p class="text-gray-400 mb-0.5">No. HP</p><p class="font-semibold text-gray-700">{{ $hp }}</p></div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        {{-- Sumber --}}
        <p class="text-center text-xs text-gray-400 mt-4">Sumber: Blangko Profil Ninik Mamak 2026 — Nagari Pematang Panjang</p>

    </div>
</div>

<script>
function filterSuku(suku) {
    // Update button styles
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('bg-green-600', 'text-white');
        btn.classList.add('bg-white', 'border', 'border-gray-200', 'text-gray-600');
    });
    document.getElementById('btn-' + suku).classList.add('bg-green-600', 'text-white');
    document.getElementById('btn-' + suku).classList.remove('bg-white', 'border', 'border-gray-200', 'text-gray-600');

    // Show/hide sections
    document.querySelectorAll('.suku-group').forEach(group => {
        const parentSection = group.closest('.mb-12');
        if (suku === 'semua' || group.dataset.suku === suku) {
            parentSection.style.display = '';
        } else {
            parentSection.style.display = 'none';
        }
    });
}
</script>
@endsection
