{{-- resources/views/informasi/profil.blade.php --}}
@extends('layouts.app')

@section('title', 'Profil Nagari')

@section('content')
    <x-page-header
        title="Profil Nagari"
        subtitle="Mengenal lebih dalam sejarah, potensi, dan keunikan Nagari Pematang Panjang"
        image="images/images/lokasistrategis.jpg"
    />

    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                {{-- ===================== SIDEBAR ===================== --}}
                <div class="lg:col-span-3">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sticky top-24">
                        <p class="text-xs font-bold uppercase tracking-widest text-gray-400 mb-4">Navigasi Profil</p>
                        <nav class="space-y-1" id="sideNav">
                            @foreach ([
                                'sejarah'          => 'Sejarah',
                                'batas-wilayah'    => 'Batas Wilayah',
                                'jorong'           => 'Daftar Jorong',
                                'kondisi-geografis'=> 'Kondisi Geografis',
                                'kondisi-nagari'   => 'Kondisi Nagari',
                                'topografi'        => 'Topografi',
                            ] as $id => $label)
                                <a href="#{{ $id }}"
                                   class="nav-link flex items-center gap-2 py-2 px-3 text-sm text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg transition-all duration-200 font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-300 flex-shrink-0"></span>
                                    {{ $label }}
                                </a>
                            @endforeach
                        </nav>

                        {{-- Quick stats --}}
                        <div class="mt-6 pt-6 border-t border-gray-100 space-y-3">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Luas Wilayah</span>
                                <span class="font-bold text-gray-900">2.775 Ha</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Penduduk</span>
                                <span class="font-bold text-gray-900">6.938 jiwa</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Jorong</span>
                                <span class="font-bold text-gray-900">11 Jorong</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-500">Jarak ke Ibukota</span>
                                <span class="font-bold text-gray-900">± 15 km</span>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- ===================== MAIN CONTENT ===================== --}}
                <div class="lg:col-span-6 space-y-8">

                    {{-- ── PROFIL UMUM — Stat Cards ── --}}
                    <section class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-1 h-8 bg-green-600 rounded-full"></div>
                            <h2 class="text-2xl font-bold text-gray-900">Profil Umum Nagari Pematang Panjang</h2>
                        </div>
                        <p class="text-gray-500 text-sm mb-8 ml-4">Kecamatan Sijunjung, Kabupaten Sijunjung, Provinsi Sumatera Barat</p>

                        <p class="text-gray-600 leading-relaxed mb-8">
                            Nagari Pematang Panjang adalah salah satu nagari yang terletak di Kecamatan Sijunjung,
                            Kabupaten Sijunjung, Provinsi Sumatera Barat. Nagari ini memiliki keunikan tersendiri
                            dengan potensi alam yang melimpah dan masyarakat yang ramah serta berbudaya.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            @foreach ([
                                ['label'=>'Luas Wilayah',     'value'=>'2.775 Ha', 'icon'=>'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7', 'bg'=>'bg-green-50', 'text'=>'text-green-700', 'border'=>'border-green-200'],
                                ['label'=>'Jumlah Penduduk',  'value'=>'6.938 jiwa','icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'bg'=>'bg-blue-50', 'text'=>'text-blue-700', 'border'=>'border-blue-200'],
                                ['label'=>'Jarak ke Ibukota', 'value'=>'± 15 KM',  'icon'=>'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z', 'bg'=>'bg-amber-50', 'text'=>'text-amber-700', 'border'=>'border-amber-200'],
                                ['label'=>'Jumlah Jorong',    'value'=>'11 Jorong', 'icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'bg'=>'bg-purple-50', 'text'=>'text-purple-700', 'border'=>'border-purple-200'],
                            ] as $stat)
                                <div class="{{ $stat['bg'] }} border {{ $stat['border'] }} rounded-2xl p-5 flex flex-col items-center text-center">
                                    <div class="{{ $stat['bg'] }} rounded-xl p-2 mb-3">
                                        <svg class="w-6 h-6 {{ $stat['text'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $stat['icon'] }}"/>
                                        </svg>
                                    </div>
                                    <p class="text-xs text-gray-500 mb-1">{{ $stat['label'] }}</p>
                                    <p class="text-lg font-bold {{ $stat['text'] }}">{{ $stat['value'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    {{-- ── SEJARAH — Timeline Visual ── --}}
                    <section id="sejarah" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-green-600 rounded-full"></div>
                            <h2 class="text-2xl font-bold text-gray-900">Sejarah</h2>
                        </div>

                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-100 rounded-2xl p-6 mb-8">
                            <div class="flex gap-4">
                                <div class="flex-shrink-0 w-10 h-10 bg-green-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <p class="text-green-800 italic leading-relaxed text-sm">
                                    "Nama Pematang Panjang berasal dari kondisi geografis wilayah yang berupa dataran tinggi
                                    yang memanjang, menyerupai pematang sawah yang panjang."
                                </p>
                            </div>
                        </div>

                        {{-- Asal Usul Nama --}}
                        <h3 class="text-base font-semibold text-gray-900 mb-2">Asal Usul Nama</h3>
                        <p class="text-gray-600 leading-relaxed text-sm mb-6">
                            Nagari Pematang Panjang mendapat namanya dari kondisi geografis wilayah yang berupa
                            dataran tinggi yang memanjang. Kata "Pematang" dalam bahasa lokal merujuk pada tanah
                            yang lebih tinggi dari sekitarnya, sedangkan "Panjang" menggambarkan bentuk wilayah
                            yang memanjang dari utara ke selatan.
                        </p>

                        <h3 class="text-base font-semibold text-gray-900 mb-2">Periode Kerajaan Minangkabau</h3>
                        <p class="text-gray-600 leading-relaxed text-sm mb-8">
                            Wilayah Pematang Panjang pada masa lampau merupakan bagian dari kerajaan Minangkabau.
                            Sistem pemerintahan menggunakan adat istiadat Minangkabau dengan struktur ninik mamak,
                            penghulu, dan datuk sebagai pemimpin masyarakat.
                        </p>

                        {{-- Timeline --}}
                        <h3 class="text-base font-semibold text-gray-900 mb-5">Timeline Penting</h3>
                        <div class="relative">
                            <div class="absolute left-5 top-0 bottom-0 w-0.5 bg-gray-200"></div>
                            <div class="space-y-6">
                                @foreach ([
                                    ['era'=>'Era Kerajaan', 'desc'=>'Bagian dari Kerajaan Minangkabau', 'color'=>'bg-amber-500'],
                                    ['era'=>'1900–1942',    'desc'=>'Masa kolonial Belanda',             'color'=>'bg-red-500'],
                                    ['era'=>'1945',         'desc'=>'Menjadi bagian Republik Indonesia', 'color'=>'bg-green-600'],
                                    ['era'=>'1979',         'desc'=>'Pembentukan sistem pemerintahan nagari modern', 'color'=>'bg-blue-500'],
                                    ['era'=>'2001',         'desc'=>'Implementasi otonomi daerah',       'color'=>'bg-purple-500'],
                                    ['era'=>'2010–Sekarang','desc'=>'Era digitalisasi dan modernisasi',  'color'=>'bg-teal-500'],
                                ] as $t)
                                    <div class="relative flex gap-5 items-start">
                                        <div class="flex-shrink-0 w-10 h-10 {{ $t['color'] }} rounded-full flex items-center justify-center z-10">
                                            <div class="w-2.5 h-2.5 bg-white rounded-full"></div>
                                        </div>
                                        <div class="flex-1 bg-gray-50 rounded-xl p-4 border border-gray-100">
                                            <p class="font-bold text-gray-900 text-sm">{{ $t['era'] }}</p>
                                            <p class="text-gray-500 text-xs mt-0.5">{{ $t['desc'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>

                    {{-- ── BATAS WILAYAH — Compass Layout + Koordinat ── --}}
                    <section id="batas-wilayah" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-green-600 rounded-full"></div>
                            <h2 class="text-2xl font-bold text-gray-900">Batas Wilayah</h2>
                        </div>

                        <p class="text-gray-600 text-sm leading-relaxed mb-8">
                            Nagari Pematang Panjang terletak di Kecamatan Sijunjung, Kabupaten Sijunjung,
                            Provinsi Sumatera Barat dengan batas-batas wilayah sebagai berikut:
                        </p>

                        {{-- Compass grid --}}
                        <div class="grid grid-cols-3 gap-3 max-w-md mx-auto mb-8">
                            <div></div>
                            {{-- Utara --}}
                            <div class="bg-red-50 border border-red-100 rounded-2xl p-4 text-center">
                                <svg class="w-5 h-5 text-red-500 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                                </svg>
                                <p class="text-xs font-bold text-red-700 mb-1">UTARA</p>
                                <p class="text-xs text-red-600 leading-tight">Nagari Muaro</p>
                            </div>
                            <div></div>

                            {{-- Barat --}}
                            <div class="bg-green-50 border border-green-100 rounded-2xl p-4 text-center">
                                <svg class="w-5 h-5 text-green-500 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                <p class="text-xs font-bold text-green-700 mb-1">BARAT</p>
                                <p class="text-xs text-green-600 leading-tight">Nagari Kandang Baru & Koto Tuo</p>
                            </div>

                            {{-- Tengah --}}
                            <div class="bg-gradient-to-br from-green-600 to-emerald-700 rounded-2xl p-4 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>

                            {{-- Timur --}}
                            <div class="bg-amber-50 border border-amber-100 rounded-2xl p-4 text-center">
                                <svg class="w-5 h-5 text-amber-500 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                                <p class="text-xs font-bold text-amber-700 mb-1">TIMUR</p>
                                <p class="text-xs text-amber-600 leading-tight">Nagari Sijunjung</p>
                            </div>

                            <div></div>
                            {{-- Selatan --}}
                            <div class="bg-blue-50 border border-blue-100 rounded-2xl p-4 text-center">
                                <svg class="w-5 h-5 text-blue-500 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                                </svg>
                                <p class="text-xs font-bold text-blue-700 mb-1">SELATAN</p>
                                <p class="text-xs text-blue-600 leading-tight">Nagari Lalan</p>
                            </div>
                            <div></div>
                        </div>

                        {{-- Koordinat --}}
                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                            <h3 class="text-sm font-bold text-gray-700 mb-4 flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                Koordinat Geografis
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-white rounded-xl p-4 border border-gray-100">
                                    <p class="text-xs text-gray-400 mb-1">Lintang Selatan</p>
                                    <p class="font-mono font-bold text-gray-800 text-sm">0°42'30" – 0°45'15" LS</p>
                                </div>
                                <div class="bg-white rounded-xl p-4 border border-gray-100">
                                    <p class="text-xs text-gray-400 mb-1">Bujur Timur</p>
                                    <p class="font-mono font-bold text-gray-800 text-sm">101°10'20" – 101°13'45" BT</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    {{-- ── JORONG — Tabel Modern ── --}}
                    <section id="jorong" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-1 h-8 bg-green-600 rounded-full"></div>
                                <h2 class="text-2xl font-bold text-gray-900">Daftar Jorong</h2>
                            </div>
                            <span class="bg-green-100 text-green-800 text-xs font-bold px-3 py-1 rounded-full">11 Jorong</span>
                        </div>

                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Nagari Pematang Panjang terdiri dari 11 (sebelas) jorong sebagai pembagian wilayah
                            administratif terkecil. Setiap jorong dipimpin oleh seorang Kepala Jorong.
                        </p>

                        <div class="overflow-hidden rounded-2xl border border-gray-100">
                            <table class="w-full text-sm">
                                <thead>
                                    <tr class="bg-gradient-to-r from-green-700 to-green-600 text-white">
                                        <th class="py-3 px-4 text-left font-semibold text-xs uppercase tracking-wider">#</th>
                                        <th class="py-3 px-4 text-left font-semibold text-xs uppercase tracking-wider">Nama Jorong</th>
                                        <th class="py-3 px-4 text-right font-semibold text-xs uppercase tracking-wider">Kepala Jorong</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ([
                                        ['Jorong Koran',         'Mustaben'],
                                        ['Jorong Kambuik Koman', 'Erisman'],
                                        ['Jorong Koto Tangah',   'Wandri Eka Putra'],
                                        ['Jorong Parak Gadang',  'Fani Akbar'],
                                        ['Jorong Pale',          'Dulmadi'],
                                        ['Jorong Duri',          'Endri Junaidi'],
                                        ['Jorong Pondok Jago',   'Sardiman Edi'],
                                        ['Jorong Kalumpang',     'Zul Abdissalam'],
                                        ['Jorong Koman Kacik',   'Yusril Junaidi'],
                                        ['Jorong Limau Sundai',  'Burman Idrus'],
                                        ['Jorong Sitampung',     'Heriyanto'],
                                    ] as $i => $jorong)
                                        <tr class="{{ $i % 2 === 0 ? 'bg-white' : 'bg-gray-50' }} hover:bg-green-50 transition-colors">
                                            <td class="py-3 px-4 text-gray-400 font-mono text-xs">{{ str_pad($i+1, 2, '0', STR_PAD_LEFT) }}</td>
                                            <td class="py-3 px-4 font-semibold text-gray-800">{{ $jorong[0] }}</td>
                                            <td class="py-3 px-4 text-right text-gray-600">{{ $jorong[1] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>

                    {{-- ── KONDISI GEOGRAFIS — Chart Ketinggian + Iklim ── --}}
                    <section id="kondisi-geografis" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="w-1 h-8 bg-green-600 rounded-full"></div>
                            <h2 class="text-2xl font-bold text-gray-900">Kondisi Geografis</h2>
                        </div>

                        {{-- Ketinggian Visual Bar --}}
                        <h3 class="text-sm font-bold text-gray-700 mb-4">Ketinggian Wilayah (mdpl)</h3>
                        <div class="flex items-end gap-4 h-40 mb-2 px-2">
                            @foreach ([
                                ['label'=>'Terendah', 'val'=>250,  'max'=>650, 'color'=>'bg-emerald-400'],
                                ['label'=>'Rata-rata', 'val'=>420,  'max'=>650, 'color'=>'bg-amber-400'],
                                ['label'=>'Tertinggi', 'val'=>650,  'max'=>650, 'color'=>'bg-red-400'],
                            ] as $bar)
                                <div class="flex-1 h-full flex flex-col justify-end items-center gap-2">
                                    <span class="text-xs font-bold text-gray-700">{{ $bar['val'] }}m</span>
                                    <div class="w-full {{ $bar['color'] }} rounded-t-xl transition-all duration-700"
                                         style="height: {{ round(($bar['val']/$bar['max'])*100) }}%">
                                    </div>
                                    <span class="text-xs text-gray-500">{{ $bar['label'] }}</span>
                                </div>
                            @endforeach
                        </div>
                        <p class="text-xs text-gray-400 text-center mb-8">Ketinggian dalam meter di atas permukaan laut (mdpl)</p>

                        {{-- Iklim --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-sky-50 rounded-2xl p-6 border border-sky-100">
                                <h3 class="text-sm font-bold text-sky-800 mb-4 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                                    </svg>
                                    Tipe Iklim
                                </h3>
                                <p class="text-sky-700 text-sm mb-4">Iklim tropis dengan dua musim utama</p>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2 bg-white rounded-lg px-3 py-2">
                                        <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                        <span class="text-xs text-gray-700">Musim Hujan: Oktober – Maret</span>
                                    </div>
                                    <div class="flex items-center gap-2 bg-white rounded-lg px-3 py-2">
                                        <div class="w-2 h-2 rounded-full bg-amber-400"></div>
                                        <span class="text-xs text-gray-700">Musim Kemarau: April – September</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-blue-50 rounded-2xl p-6 border border-blue-100">
                                <h3 class="text-sm font-bold text-blue-800 mb-4">Curah Hujan</h3>
                                <p class="text-xs text-blue-600 mb-3">Curah Hujan Tahunan</p>
                                <div class="flex items-center gap-3 mb-2">
                                    <div class="flex-1 bg-blue-100 rounded-full h-3">
                                        <div class="bg-blue-500 h-3 rounded-full" style="width: 85%"></div>
                                    </div>
                                    <span class="text-blue-800 font-bold text-sm flex-shrink-0">2.800mm</span>
                                </div>
                                <p class="text-xs text-blue-500">85% dari kapasitas maksimum ideal</p>
                            </div>
                        </div>
                    </section>

                    {{-- ── KONDISI NAGARI — Fasilitas + Potensi ── --}}
                    <section id="kondisi-nagari" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <div class="flex items-center gap-3 mb-8">
                            <div class="w-1 h-8 bg-green-600 rounded-full"></div>
                            <h2 class="text-2xl font-bold text-gray-900">Kondisi Nagari</h2>
                        </div>

                        {{-- Fasilitas Umum --}}
                        <h3 class="text-sm font-bold text-gray-700 uppercase tracking-widest mb-4">Fasilitas Umum</h3>
                        <div class="grid grid-cols-3 sm:grid-cols-6 gap-3 mb-10">
                            @foreach ([
                                ['Kantor Wali Nagari', 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5', 'bg-blue-50 border-blue-100 text-blue-600'],
                                ['Sekolah', 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'bg-green-50 border-green-100 text-green-600'],
                                ['Puskesmas', 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'bg-red-50 border-red-100 text-red-500'],
                                ['Masjid', 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z', 'bg-purple-50 border-purple-100 text-purple-600'],
                                ['Pasar', 'M16 11V7a4 4 0 00-8 0v4M8 11v6h8v-6M8 11H6a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2v-6a2 2 0 00-2-2h-2', 'bg-amber-50 border-amber-100 text-amber-600'],
                                ['Jalan & Jembatan', 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7', 'bg-indigo-50 border-indigo-100 text-indigo-600'],
                            ] as $f)
                                <div class="flex flex-col items-center text-center p-3 rounded-2xl border {{ $f[2] }}">
                                    <svg class="w-6 h-6 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $f[1] }}"/>
                                    </svg>
                                    <p class="text-xs font-semibold text-gray-700 leading-tight">{{ $f[0] }}</p>
                                </div>
                            @endforeach
                        </div>

                        {{-- Potensi Unggulan --}}
                        <h3 class="text-sm font-bold text-gray-700 uppercase tracking-widest mb-4">Potensi Unggulan</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-green-50 rounded-2xl p-6 border border-green-100">
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="w-8 h-8 bg-green-600 rounded-xl flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-green-900">Sektor Pertanian</h4>
                                </div>
                                <ul class="space-y-2">
                                    @foreach (['Padi sawah dan ladang','Jagung dan ubi kayu','Sayuran dan cabai','Kelapa sawit'] as $item)
                                        <li class="flex items-center gap-2 text-sm text-green-800">
                                            <svg class="w-3.5 h-3.5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="bg-blue-50 rounded-2xl p-6 border border-blue-100">
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="w-8 h-8 bg-blue-600 rounded-xl flex items-center justify-center">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M8 11v6h8v-6M8 11H6a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2v-6a2 2 0 00-2-2h-2"/>
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-blue-900">Sektor UMKM</h4>
                                </div>
                                <ul class="space-y-2">
                                    @foreach (['Kerajinan tangan','Makanan dan minuman','Industri rumah tangga','Perdagangan kecil'] as $item)
                                        <li class="flex items-center gap-2 text-sm text-blue-800">
                                            <svg class="w-3.5 h-3.5 text-blue-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </section>

                    {{-- ── TOPOGRAFI — Donut Chart + Bar Chart Jenis Tanah ── --}}
                    <section id="topografi" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-1 h-8 bg-green-600 rounded-full"></div>
                            <h2 class="text-2xl font-bold text-gray-900">Topografi</h2>
                        </div>

                        <p class="text-gray-600 text-sm leading-relaxed mb-8">
                            Nagari Pematang Panjang memiliki topografi yang bervariasi, dari dataran tinggi
                            hingga lembah yang subur. Bentuk wilayah yang memanjang dari utara ke selatan
                            menjadi ciri khas nagari ini.
                        </p>

                        {{-- Donut Chart Bentuk Wilayah --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                            <div>
                                <h3 class="text-sm font-bold text-gray-700 mb-4">Bentuk Wilayah (%)</h3>
                                <div class="relative flex justify-center">
                                    <canvas id="topoChart" width="220" height="220"></canvas>
                                </div>
                                <div class="flex flex-col gap-2 mt-4">
                                    @foreach ([
                                        ['Dataran Tinggi', '40%', '#16a34a'],
                                        ['Lembah',         '35%', '#2563eb'],
                                        ['Perbukitan',     '25%', '#d97706'],
                                    ] as $leg)
                                        <div class="flex items-center gap-2 text-sm">
                                            <span class="w-3 h-3 rounded-full flex-shrink-0" style="background:{{ $leg[2] }}"></span>
                                            <span class="text-gray-600">{{ $leg[0] }}</span>
                                            <span class="ml-auto font-bold text-gray-900">{{ $leg[1] }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- Jenis Tanah Bar --}}
                            <div>
                                <h3 class="text-sm font-bold text-gray-700 mb-4">Jenis Tanah (%)</h3>
                                <canvas id="tanahChart" height="220"></canvas>
                                <div class="flex flex-col gap-3 mt-4 text-sm">
                                    @foreach ([
                                        ['Tanah Alluvial',  '60%', 'Dominan di area persawahan, sangat subur untuk pertanian', '#16a34a'],
                                        ['Tanah Latosol',   '25%', 'Di daerah perbukitan, cocok untuk perkebunan karet', '#dc2626'],
                                        ['Tanah Podsolik',  '15%', 'Di lereng bukit, memerlukan pengelolaan khusus', '#9ca3af'],
                                    ] as $tanah)
                                        <div class="bg-gray-50 rounded-xl p-3 border border-gray-100">
                                            <div class="flex justify-between items-center mb-1">
                                                <span class="font-semibold text-gray-800 text-xs">{{ $tanah[0] }}</span>
                                                <span class="font-bold text-xs" style="color:{{ $tanah[3] }}">{{ $tanah[1] }}</span>
                                            </div>
                                            <p class="text-xs text-gray-500">{{ $tanah[2] }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- Sumber Daya Air --}}
                        <h3 class="text-sm font-bold text-gray-700 uppercase tracking-widest mb-4">Sumber Daya Air</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-blue-50 rounded-2xl p-5 border border-blue-100">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                    </svg>
                                    <h4 class="font-bold text-blue-800 text-sm">Sungai</h4>
                                </div>
                                <ul class="space-y-1.5">
                                    @foreach (['Sungai Pematang (sungai utama)','Sungai Lubuk Basung','Beberapa anak sungai kecil'] as $s)
                                        <li class="text-xs text-blue-700 flex items-center gap-1.5">
                                            <span class="w-1 h-1 rounded-full bg-blue-400 flex-shrink-0"></span>{{ $s }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="bg-cyan-50 rounded-2xl p-5 border border-cyan-100">
                                <div class="flex items-center gap-2 mb-3">
                                    <svg class="w-5 h-5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                    <h4 class="font-bold text-cyan-800 text-sm">Irigasi</h4>
                                </div>
                                <ul class="space-y-1.5">
                                    @foreach (['Jaringan irigasi teknis','Irigasi semi teknis','Irigasi sederhana/tradisional'] as $ir)
                                        <li class="text-xs text-cyan-700 flex items-center gap-1.5">
                                            <span class="w-1 h-1 rounded-full bg-cyan-400 flex-shrink-0"></span>{{ $ir }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </section>

                </div>{{-- end main --}}

                {{-- ===================== RIGHT SIDEBAR ===================== --}}
                <div class="lg:col-span-3">
                    <div class="sticky top-24 space-y-6">
                        {{-- ── Tabel Identitas Nagari ── --}}
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                            {{-- Identitas Nagari --}}
                            <div class="bg-gradient-to-r from-green-700 to-green-600 px-4 py-3 flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <h3 class="text-xs font-bold text-white uppercase tracking-wider">Identitas Nagari</h3>
                            </div>
                            <table class="w-full text-xs">
                                @foreach ([
                                    ['Kode Nagari',     '1303052003'],
                                    ['Kode Kecamatan',  '130305'],
                                    ['Kode Kabupaten',  '1303'],
                                    ['Kode Provinsi',   '13'],
                                    ['Kode Pos',        '27561'],
                                ] as [$key, $val])
                                    <tr class="border-b border-gray-50 hover:bg-gray-50">
                                        <td class="py-2 px-4 text-gray-500">{{ $key }}</td>
                                        <td class="py-2 px-4 font-mono font-semibold text-gray-800 text-right">: {{ $val }}</td>
                                    </tr>
                                @endforeach
                            </table>

                            {{-- Kantor Nagari --}}
                            <div class="bg-gradient-to-r from-green-700 to-green-600 px-4 py-3 flex items-center gap-2 mt-2">
                                <svg class="w-3.5 h-3.5 text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"/>
                                </svg>
                                <h3 class="text-xs font-bold text-white uppercase tracking-wider">Kantor Nagari</h3>
                            </div>
                            <div class="px-4 py-3">
                                <p class="text-xs text-gray-600 leading-relaxed">Jorong Koto Tangah, Kecamatan Sijunjung, Kabupaten Sijunjung — Sumatera Barat</p>
                            </div>

                            {{-- Jam Kerja --}}
                            <div class="bg-gradient-to-r from-green-700 to-green-600 px-4 py-3 flex items-center gap-2">
                                <svg class="w-3.5 h-3.5 text-green-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <h3 class="text-xs font-bold text-white uppercase tracking-wider">Jam Kerja</h3>
                            </div>
                            <table class="w-full text-xs">
                                @foreach ([
                                    ['Senin',  '08:00 - 16:00'],
                                    ['Selasa', '08:00 - 16:00'],
                                    ['Rabu',   '08:00 - 16:00'],
                                    ['Kamis',  '08:00 - 16:00'],
                                    ['Jumat',  '08:00 - 16:30'],
                                    ['Sabtu',  'Libur'],
                                    ['Minggu', 'Libur'],
                                ] as [$hari, $jam])
                                    <tr class="border-b border-gray-50 hover:bg-gray-50">
                                        <td class="py-2 px-4 text-gray-600">{{ $hari }}</td>
                                        <td class="py-2 px-4 text-right font-medium {{ in_array($hari, ['Sabtu','Minggu']) ? 'text-red-500' : 'text-gray-800' }}">
                                            {{ $jam }}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Chart.js --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script>
        // ── Donut: Bentuk Wilayah ──
        new Chart(document.getElementById('topoChart'), {
            type: 'doughnut',
            data: {
                labels: ['Dataran Tinggi (40%)', 'Lembah (35%)', 'Perbukitan (25%)'],
                datasets: [{
                    data: [40, 35, 25],
                    backgroundColor: ['#16a34a', '#2563eb', '#d97706'],
                    borderWidth: 0,
                    hoverOffset: 8,
                }]
            },
            options: {
                cutout: '68%',
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: ctx => ` ${ctx.label}`
                        }
                    }
                }
            }
        });

        // ── Bar: Jenis Tanah ──
        new Chart(document.getElementById('tanahChart'), {
            type: 'bar',
            data: {
                labels: ['Alluvial', 'Latosol', 'Podsolik'],
                datasets: [{
                    label: 'Komposisi (%)',
                    data: [60, 25, 15],
                    backgroundColor: ['#16a34a', '#dc2626', '#9ca3af'],
                    borderRadius: 8,
                    borderSkipped: false,
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: { display: false },
                    tooltip: { callbacks: { label: ctx => ` ${ctx.raw}%` } }
                },
                scales: {
                    x: {
                        grid: { color: '#f3f4f6' },
                        ticks: { callback: v => v + '%', font: { size: 11 } },
                        max: 70,
                    },
                    y: {
                        grid: { display: false },
                        ticks: { font: { size: 11 } }
                    }
                }
            }
        });

        // ── Smooth scroll + active nav highlight ──
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });

        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const links    = document.querySelectorAll('.nav-link');
            let current    = '';

            sections.forEach(s => {
                if (pageYOffset >= s.offsetTop - 120) current = s.getAttribute('id');
            });

            links.forEach(link => {
                link.classList.remove('bg-green-50','text-green-700');
                link.querySelector('span').classList.remove('bg-green-500');
                link.querySelector('span').classList.add('bg-gray-300');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('bg-green-50','text-green-700');
                    link.querySelector('span').classList.remove('bg-gray-300');
                    link.querySelector('span').classList.add('bg-green-500');
                }
            });
        });
    </script>
@endsection
