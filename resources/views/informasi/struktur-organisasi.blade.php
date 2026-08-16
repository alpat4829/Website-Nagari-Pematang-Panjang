{{-- resources/views/informasi/struktur-organisasi.blade.php --}}
@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')
    <x-page-header
        title="Struktur Organisasi"
        subtitle="Susunan pemerintahan dan perangkat Nagari Pematang Panjang periode 2022–2028"
        image="images/images/lokasistrategis.jpg"
    />

    {{-- ─────────── custom styles ─────────── --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Cinzel:wght@400;600&display=swap');

        .org-avatar {
            position: relative;
            display: inline-block;
        }
        .org-avatar img,
        .org-avatar .avatar-placeholder {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            border-radius: 9999px;
        }
        .ring-gold {
            box-shadow:
                0 0 0 3px #fff,
                0 0 0 6px #d4a017,
                0 0 0 8px rgba(212,160,23,0.25),
                0 4px 20px rgba(0,0,0,0.15);
        }
        .ring-silver {
            box-shadow:
                0 0 0 3px #fff,
                0 0 0 6px #94a3b8,
                0 0 0 8px rgba(148,163,184,0.25),
                0 4px 16px rgba(0,0,0,0.10);
        }
        .ring-green {
            box-shadow:
                0 0 0 3px #fff,
                0 0 0 6px #16a34a,
                0 0 0 8px rgba(22,163,74,0.20),
                0 4px 14px rgba(0,0,0,0.08);
        }
        .connector-v {
            width: 2px;
            background: linear-gradient(to bottom, #d1fae5, #86efac);
            margin: 0 auto;
        }
        .connector-h {
            border-top: 2px dashed #86efac;
        }
        .font-cursive-heading { font-family: 'Dancing Script', cursive; }
        .font-cinzel { font-family: 'Cinzel', serif; }

        .card-member:hover .member-photo {
            transform: scale(1.05);
            transition: transform .3s ease;
        }
        .member-photo { transition: transform .3s ease; }
    </style>

    <div class="bg-gradient-to-b from-gray-50 to-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- ══════════════════════════════════════════════ --}}
            {{-- WALI NAGARI                                    --}}
            {{-- ══════════════════════════════════════════════ --}}
            <div class="text-center mb-4">
                <p class="font-cursive-heading text-green-600 text-2xl mb-1">Pimpinan Tertinggi</p>
                <h2 class="font-cinzel text-3xl font-bold text-gray-800 tracking-wide">Wali Nagari</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-green-400 to-emerald-600 rounded-full mx-auto mt-3 mb-10"></div>
            </div>

            <div class="flex justify-center mb-6">
                <div class="bg-white rounded-3xl shadow-xl border border-green-100 px-10 py-8 max-w-sm w-full text-center group">
                    {{-- Foto cincin emas --}}
                    <div class="flex justify-center mb-5">
                        <div class="w-32 h-32 org-avatar ring-gold rounded-full overflow-hidden">
                            <img src="{{ asset('images/walnag.png') }}" alt="Wali Nagari" class="member-photo w-full h-full object-cover object-top">
                        </div>
                    </div>
                    <div class="inline-block bg-green-700 text-white text-xs font-bold uppercase tracking-widest px-4 py-1 rounded-full mb-3">Wali Nagari</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Mulyadi, S.Pd.</h3>
                    <p class="font-cursive-heading text-green-600 text-lg">Nagari Pematang Panjang</p>
                    <p class="text-gray-400 text-xs mt-2">Periode 2022 – 2028</p>
                </div>
            </div>

            {{-- Konektor vertikal --}}
            <div class="connector-v h-10 mb-0"></div>

            {{-- ══════════════════════════════════════════════ --}}
            {{-- SEKRETARIS NAGARI                              --}}
            {{-- ══════════════════════════════════════════════ --}}
            <div class="flex justify-center mb-0">
                <div class="bg-white rounded-2xl shadow-md border border-slate-100 px-8 py-6 max-w-xs w-full text-center">
                    <div class="w-24 h-24 mx-auto mb-4 org-avatar ring-silver rounded-full overflow-hidden">
                        <img src="{{ asset('images/Latar Biru/Latar Biru/Sukri Rahmad.png') }}" alt="Sekretaris Nagari" class="member-photo w-full h-full object-cover object-top">
                    </div>
                    <div class="inline-block bg-slate-600 text-white text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-3">Sekretaris Nagari</div>
                    <h3 class="text-lg font-bold text-gray-900">Sukri Rahmat</h3>
                    <p class="text-gray-400 text-xs mt-1">Koordinasi & Administrasi Umum</p>
                </div>
            </div>

            {{-- Konektor --}}
            <div class="connector-v h-10 mb-0"></div>

            {{-- ══════════════════════════════════════════════ --}}
            {{-- KEPALA URUSAN & SEKSI                          --}}
            {{-- ══════════════════════════════════════════════ --}}
            <div class="text-center mb-8">
                <p class="font-cursive-heading text-green-500 text-xl mb-1">Perangkat Nagari</p>
                <h2 class="font-cinzel text-2xl font-bold text-gray-700 tracking-wide">Kepala Urusan & Kepala Seksi</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-green-300 to-emerald-500 rounded-full mx-auto mt-2"></div>
            </div>

            @php
            $perangkat = [
                [
                    'jabatan' => 'Kaur Keuangan',
                    'nama'    => 'Putri Melati, SE',
                    'tugas'   => 'Pengelolaan keuangan nagari',
                    'foto'    => 'PUTRI MELATI.png',
                    'color'   => 'amber',
                ],
                [
                    'jabatan' => 'Kaur TU & Umum',
                    'nama'    => 'Retno Irmayati, ST',
                    'tugas'   => 'Administrasi dan kepegawaian',
                    'foto'    => null,          // belum ada foto
                    'color'   => 'purple',
                ],
                [
                    'jabatan' => 'Kaur Perencanaan',
                    'nama'    => 'Lia Kurniawati',
                    'tugas'   => 'Perencanaan pembangunan nagari',
                    'foto'    => 'Poto Lia Kur.png',
                    'color'   => 'green',
                ],
                [
                    'jabatan' => 'Kasi Pelayanan',
                    'nama'    => 'Andrean Febrizal, S.Pd',
                    'tugas'   => 'Pelayanan masyarakat nagari',
                    'foto'    => 'ANDREAN FEBRIZAL.png',
                    'color'   => 'blue',
                ],
                [
                    'jabatan' => 'Kasi Pemerintahan',
                    'nama'    => 'Ben Elwinda',
                    'tugas'   => 'Urusan pemerintahan nagari',
                    'foto'    => 'BEN ELWINDA.png',
                    'color'   => 'indigo',
                ],
                [
                    'jabatan' => 'Kasi Kesejahteraan',
                    'nama'    => 'Yorianto, S.Pd.I',
                    'tugas'   => 'Kesejahteraan masyarakat',
                    'foto'    => 'DA YORI.png',
                    'color'   => 'rose',
                ],
            ];

            $colorMap = [
                'amber'  => ['badge' => 'bg-amber-500',  'ring' => 'ring-amber-400',  'text' => 'text-amber-600',  'ring_shadow' => '#f59e0b'],
                'purple' => ['badge' => 'bg-purple-500', 'ring' => 'ring-purple-400', 'text' => 'text-purple-600', 'ring_shadow' => '#a855f7'],
                'green'  => ['badge' => 'bg-green-600',  'ring' => 'ring-green-500',  'text' => 'text-green-600',  'ring_shadow' => '#16a34a'],
                'blue'   => ['badge' => 'bg-blue-600',   'ring' => 'ring-blue-500',   'text' => 'text-blue-600',   'ring_shadow' => '#2563eb'],
                'indigo' => ['badge' => 'bg-indigo-600', 'ring' => 'ring-indigo-500', 'text' => 'text-indigo-600', 'ring_shadow' => '#4f46e5'],
                'rose'   => ['badge' => 'bg-rose-500',   'ring' => 'ring-rose-400',   'text' => 'text-rose-600',   'ring_shadow' => '#f43f5e'],
            ];
            @endphp

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5 mb-16">
                @foreach ($perangkat as $p)
                @php $c = $colorMap[$p['color']]; @endphp
                <div class="card-member bg-white rounded-2xl shadow-sm border border-gray-100 p-5 text-center hover:shadow-md transition-shadow duration-300">
                    {{-- Foto --}}
                    <div class="w-20 h-20 mx-auto mb-4 rounded-full overflow-hidden"
                         style="box-shadow: 0 0 0 3px #fff, 0 0 0 5px {{ $c['ring_shadow'] }}, 0 0 0 7px rgba(0,0,0,0.08), 0 3px 10px rgba(0,0,0,0.1);">
                        @if ($p['foto'])
                            <img src="{{ asset('images/Latar Biru/Latar Biru/' . $p['foto']) }}"
                                 alt="{{ $p['nama'] }}"
                                 class="member-photo w-full h-full object-cover object-top">
                        @else
                            <div class="avatar-placeholder w-full h-full flex items-center justify-center {{ $c['badge'] }}">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <span class="{{ $c['badge'] }} text-white text-xs font-bold px-2.5 py-0.5 rounded-full block mb-2 mx-auto w-fit">{{ $p['jabatan'] }}</span>
                    <h4 class="text-sm font-bold text-gray-900 leading-tight">{{ $p['nama'] }}</h4>
                    <p class="text-gray-400 text-xs mt-1 leading-tight">{{ $p['tugas'] }}</p>
                </div>
                @endforeach
            </div>

            {{-- ══════════════════════════════════════════════ --}}
            {{-- KEPALA JORONG                                  --}}
            {{-- ══════════════════════════════════════════════ --}}
            <div class="text-center mb-8">
                <p class="font-cursive-heading text-green-500 text-xl mb-1">Pemimpin Wilayah Jorong</p>
                <h2 class="font-cinzel text-2xl font-bold text-gray-700 tracking-wide">Kepala Jorong</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-emerald-300 to-green-600 rounded-full mx-auto mt-2 mb-2"></div>
                <p class="text-gray-400 text-sm">11 Jorong • Nagari Pematang Panjang</p>
            </div>

            @php
            $joronger = [
                ['Jorong Koran',         'Mustaben',        'MUSTABEN.png'],
                ['Jorong Kambuik Koman', 'Erisman',         null],
                ['Jorong Koto Tangah',   'Wandri Eka Putra','WANDRI EKA PUTRA.png'],
                ['Jorong Parak Gadang',  'Fani Akbar',      null],
                ['Jorong Pale',          'Dulmadi',         'DULMADI.png'],
                ['Jorong Duri',          'Endri Junaidi',   null],
                ['Jorong Pondok Jago',   'Sardiman Edi',    'Sardiman Edi.png'],
                ['Jorong Kalumpang',     'Zul Abdissalam',  'ZUL ABDISSALAM.png'],
                ['Jorong Koman Kacik',   'Yusril Junaidi',  'YUSRIL JUNAIDI.png'],
                ['Jorong Limau Sundai',  'Burman Idrus',    'BURMAN IDRUS.png'],
                ['Jorong Sitampung',     'Heriyanto',       'HERYANTO.png'],
            ];
            @endphp

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-16">
                @foreach ($joronger as $i => [$jorong, $nama, $foto])
                <div class="card-member bg-white rounded-2xl border border-gray-100 shadow-sm p-4 text-center hover:shadow-md hover:border-green-200 transition-all duration-300">
                    {{-- Avatar lingkaran hijau --}}
                    <div class="w-16 h-16 mx-auto mb-3 rounded-full overflow-hidden"
                         style="box-shadow: 0 0 0 2px #fff, 0 0 0 4px #16a34a, 0 0 0 6px rgba(22,163,74,0.15), 0 2px 8px rgba(0,0,0,0.08);">
                        @if ($foto)
                            <img src="{{ asset('images/Latar Biru/Latar Biru/' . $foto) }}"
                                 alt="{{ $nama }}"
                                 class="member-photo w-full h-full object-cover object-top">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-green-500 to-emerald-700 flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                        @endif
                    </div>
                    <p class="text-green-700 text-xs font-bold uppercase tracking-wide mb-1 leading-tight">{{ $jorong }}</p>
                    <h4 class="text-sm font-bold text-gray-800 leading-tight">{{ $nama }}</h4>
                    <p class="text-gray-400 text-xs mt-1">Kepala Jorong</p>
                </div>
                @endforeach
            </div>

            {{-- ══════════════════════════════════════════════ --}}
            {{-- LEMBAGA KEMASYARAKATAN                         --}}
            {{-- ══════════════════════════════════════════════ --}}
            <div class="bg-gradient-to-br from-green-700 to-emerald-800 rounded-3xl p-8 md:p-12">
                <div class="text-center mb-8">
                    <p class="font-cursive-heading text-green-200 text-2xl mb-1">Bersama Membangun Nagari</p>
                    <h2 class="font-cinzel text-2xl font-bold text-white tracking-wide">Lembaga Kemasyarakatan</h2>
                    <div class="w-20 h-0.5 bg-green-300 mx-auto mt-3"></div>
                </div>

                @php
                $lembaga = [
                    ['BPN (Bamus Nagari)',  'Badan Permusyawaratan Nagari', 'Yulius',           'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
                    ['KAN',                'Kerapatan Adat Nagari',         'J.H. Dt. PHL Garang','M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3'],
                    ['LPM',                'Lembaga Pemberdayaan Masyarakat','Irwansyah',        'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                    ['BUMNAG',             'Badan Usaha Milik Nagari',      'Irwannalis',        'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['PKK Nagari',         'Pemberdayaan Kesejahteraan Keluarga','Neneng Susanti','M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
                    ['Karang Taruna',      'Organisasi Kepemudaan',         'Salman Alfarizi',   'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z'],
                ];
                @endphp

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    @foreach ($lembaga as [$singkatan, $kepanjangan, $ketua, $icon])
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5 text-center border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $icon }}"/>
                            </svg>
                        </div>
                        <h4 class="font-cinzel font-bold text-white text-sm mb-0.5">{{ $singkatan }}</h4>
                        <p class="text-green-200 text-xs leading-tight mb-2">{{ $kepanjangan }}</p>
                        <div class="border-t border-white/20 pt-2">
                            <p class="text-white font-semibold text-xs">{{ $ketua }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
