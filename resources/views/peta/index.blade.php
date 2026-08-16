{{-- resources/views/peta/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Peta Interaktif Nagari')

@push('head')
    {{-- Leaflet CSS dimuat di head agar tersedia sebelum JS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map { height: 520px; width: 100%; z-index: 0; border-radius: 0 0 1rem 1rem; }
        .leaflet-popup-content-wrapper { border-radius: 12px; box-shadow: 0 8px 32px rgba(0,0,0,0.15); }
        .leaflet-popup-content { font-family: inherit; }
    </style>
@endpush

@section('content')
    <x-page-header
        title="Peta Interaktif"
        subtitle="Lokasi dan batas wilayah Nagari Pematang Panjang, Kecamatan Sijunjung"
        image="images/images/lokasistrategis.jpg"
    />

    <div class="bg-gray-50 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            {{-- ══ STAT CARDS ══ --}}
            @php
            $stats = [
                [
                    'label'  => 'Jumlah Penduduk',
                    'value'  => '6.938',
                    'unit'   => 'jiwa',
                    'icon'   => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                    'from'   => 'from-blue-500',
                    'to'     => 'to-blue-600',
                    'light'  => 'bg-blue-50 border-blue-100',
                    'text'   => 'text-blue-700',
                ],
                [
                    'label'  => 'Jumlah KK',
                    'value'  => '2.009',
                    'unit'   => 'kepala keluarga',
                    'icon'   => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
                    'from'   => 'from-emerald-500',
                    'to'     => 'to-green-600',
                    'light'  => 'bg-green-50 border-green-100',
                    'text'   => 'text-green-700',
                ],
                [
                    'label'  => 'Jumlah Jorong',
                    'value'  => '11',
                    'unit'   => 'jorong',
                    'icon'   => 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7',
                    'from'   => 'from-amber-400',
                    'to'     => 'to-amber-500',
                    'light'  => 'bg-amber-50 border-amber-100',
                    'text'   => 'text-amber-700',
                ],
                [
                    'label'  => 'Luas Wilayah',
                    'value'  => '2.775',
                    'unit'   => 'hektar',
                    'icon'   => 'M4 8V4a1 1 0 011-1h4M4 16v4a1 1 0 001 1h4m8-16h4a1 1 0 011 1v4m-4 12h4a1 1 0 001-1v-4',
                    'from'   => 'from-violet-500',
                    'to'     => 'to-purple-600',
                    'light'  => 'bg-purple-50 border-purple-100',
                    'text'   => 'text-purple-700',
                ],
            ];
            @endphp

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach ($stats as $s)
                <div class="bg-white rounded-2xl border {{ $s['light'] }} shadow-sm hover:shadow-md transition-shadow duration-300 p-6 flex flex-col items-center text-center group">
                    {{-- Icon gradient circle --}}
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br {{ $s['from'] }} {{ $s['to'] }} flex items-center justify-center mb-4 shadow-md group-hover:scale-105 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="{{ $s['icon'] }}"/>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-400 font-medium uppercase tracking-widest mb-1">{{ $s['label'] }}</p>
                    <p class="text-3xl font-black {{ $s['text'] }} leading-none mb-1">{{ $s['value'] }}</p>
                    <p class="text-xs text-gray-400">{{ $s['unit'] }}</p>
                </div>
                @endforeach
            </div>

            {{-- ══ PETA INTERAKTIF ══ --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                {{-- Header peta --}}
                <div class="px-7 py-5 border-b border-gray-100 flex items-center justify-between">
                    <div>
                        <div class="flex items-center gap-3 mb-1">
                            <div class="w-1 h-6 bg-green-600 rounded-full"></div>
                            <h2 class="text-lg font-bold text-gray-900">Peta Interaktif</h2>
                        </div>
                        <p class="text-gray-400 text-sm ml-4">Klik & seret untuk menjelajahi wilayah Nagari Pematang Panjang</p>
                    </div>
                    <div class="hidden sm:flex items-center gap-2 bg-green-50 border border-green-100 px-4 py-2 rounded-xl text-xs text-green-700 font-semibold">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                        OpenStreetMap
                    </div>
                </div>

                {{-- Map container --}}
                <div class="relative">
                    <div id="map-loading" class="absolute inset-0 z-10 flex items-center justify-center bg-green-50">
                        <div class="text-center">
                            <div class="w-10 h-10 border-4 border-green-200 border-t-green-600 rounded-full animate-spin mx-auto mb-3"></div>
                            <p class="text-sm text-gray-500">Memuat peta…</p>
                        </div>
                    </div>
                    <div id="map"></div>
                </div>
            </div>

            {{-- ══ INFO LOKASI & BATAS WILAYAH ══ --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                {{-- Informasi Lokasi --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-7">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-1 h-6 bg-green-600 rounded-full"></div>
                        <h2 class="text-lg font-bold text-gray-900">Informasi Lokasi</h2>
                    </div>
                    <div class="space-y-4">
                        @foreach ([
                            ['M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z', 'Alammat', 'Nagari Pematang Panjang, Kec. Sijunjung, Kab. Sijunjung, Sumatera Barat'],
                            ['M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945', 'Koordinat', '0°43\'45" LS, 101°12\'30" BT'],
                            ['M4 8V4a1 1 0 011-1h4M4 16v4a1 1 0 001 1h4m8-16h4a1 1 0 011 1v4m-4 12h4a1 1 0 001-1v-4', 'Luas Wilayah', '45,5 km² (2.775 Hektar)'],
                            ['M5 10l7-7m0 0l7 7m-7-7v18', 'Ketinggian', '250 – 650 meter di atas permukaan laut'],
                        ] as [$icon, $label, $val])
                        <div class="flex items-start gap-4 p-3 rounded-xl hover:bg-gray-50 transition-colors">
                            <div class="w-9 h-9 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 font-semibold uppercase tracking-wide mb-0.5">{{ $label }}</p>
                                <p class="text-gray-800 text-sm font-medium">{{ $val }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Batas Wilayah --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-7">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-1 h-6 bg-green-600 rounded-full"></div>
                        <h2 class="text-lg font-bold text-gray-900">Batas Wilayah</h2>
                    </div>

                    {{-- Kompas visual --}}
                    <div class="grid grid-cols-3 gap-3 text-center">
                        <div></div>
                        <div class="bg-gradient-to-b from-rose-500 to-rose-600 text-white rounded-2xl p-4">
                            <p class="text-xs font-bold uppercase tracking-widest mb-1 opacity-75">Utara</p>
                            <div class="w-4 h-4 bg-white/30 rounded-full mx-auto mb-2 flex items-center justify-center">
                                <svg class="w-2.5 h-2.5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>
                            </div>
                            <p class="text-xs font-semibold leading-tight">Nagari Tanjung Balik</p>
                        </div>
                        <div></div>

                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-2xl p-4">
                            <p class="text-xs font-bold uppercase tracking-widest mb-1 opacity-75">Barat</p>
                            <div class="w-4 h-4 bg-white/30 rounded-full mx-auto mb-2 flex items-center justify-center">
                                <svg class="w-2.5 h-2.5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <p class="text-xs font-semibold leading-tight">Nagari Lubuk Tarok</p>
                        </div>

                        <div class="bg-gradient-to-br from-green-100 to-emerald-50 rounded-2xl p-4 flex items-center justify-center border border-green-200">
                            <div class="text-center">
                                <svg class="w-8 h-8 text-green-600 mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <p class="text-xs font-bold text-green-800 leading-tight">Pematang<br>Panjang</p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-l from-amber-500 to-amber-600 text-white rounded-2xl p-4">
                            <p class="text-xs font-bold uppercase tracking-widest mb-1 opacity-75">Timur</p>
                            <div class="w-4 h-4 bg-white/30 rounded-full mx-auto mb-2 flex items-center justify-center">
                                <svg class="w-2.5 h-2.5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                            </div>
                            <p class="text-xs font-semibold leading-tight">Nagari Koto Baru</p>
                        </div>

                        <div></div>
                        <div class="bg-gradient-to-t from-indigo-500 to-indigo-600 text-white rounded-2xl p-4">
                            <p class="text-xs font-bold uppercase tracking-widest mb-1 opacity-75">Selatan</p>
                            <div class="w-4 h-4 bg-white/30 rounded-full mx-auto mb-2 flex items-center justify-center">
                                <svg class="w-2.5 h-2.5 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            </div>
                            <p class="text-xs font-semibold leading-tight">Nagari Sijunjung</p>
                        </div>
                        <div></div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    {{-- Leaflet JS -- dimuat setelah DOM, sebelum script init --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        (function() {
            // Koordinat Kantor Wali Nagari Pematang Panjang (sumber: OpenStreetMap)
            const lat = -0.7323728, lng = 100.9547419;

            const map = L.map('map', {
                center: [lat, lng],
                zoom: 13,
                zoomControl: true,
                scrollWheelZoom: true,
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                maxZoom: 19,
            }).addTo(map);

            // Fix broken default icon paths (common Leaflet + Vite issue)
            delete L.Icon.Default.prototype._getIconUrl;
            L.Icon.Default.mergeOptions({
                iconUrl:       'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon.png',
                iconRetinaUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon-2x.png',
                shadowUrl:     'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
            });

            L.marker([lat, lng])
                .addTo(map)
                .bindPopup(`
                    <div style="text-align:center;padding:4px 2px;">
                        <strong style="font-size:14px;color:#15803d;">Nagari Pematang Panjang</strong><br>
                        <span style="font-size:12px;color:#6b7280;">Kecamatan Sijunjung, Kab. Sijunjung</span><br>
                        <span style="font-size:11px;color:#9ca3af;margin-top:4px;display:block;">Sumatera Barat</span>
                    </div>
                `, { maxWidth: 220 })
                .openPopup();

            document.getElementById('map-loading').style.display = 'none';
        })();
    </script>
@endsection
