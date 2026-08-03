{{-- resources/views/peta/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Peta Nagari')

@section('content')
    <div class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Peta Nagari</h1>
                <p class="text-xl opacity-90">Lokasi dan Wilayah Nagari Pematang Panjang</p>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Informasi Lokasi -->
            <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Informasi Lokasi</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Alamat</h3>
                                    <p class="text-gray-600">Nagari Pematang Panjang, Kecamatan Sijunjung, Kabupaten
                                        Sijunjung, Provinsi Sumatera Barat</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Koordinat</h3>
                                    <p class="text-gray-600">0°43'45" LS, 101°12'30" BT</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 8V4a1 1 0 011-1h4M4 16v4a1 1 0 001 1h4m8-16h4a1 1 0 011 1v4m-4 12h4a1 1 0 001-1v-4">
                                    </path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Luas Wilayah</h3>
                                    <p class="text-gray-600">45,5 km² (4.550 Hektar)</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-green-600 mr-3 mt-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Ketinggian</h3>
                                    <p class="text-gray-600">250 - 650 meter di atas permukaan laut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Batas Wilayah</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center p-4 bg-red-50 rounded-lg">
                                <h4 class="font-semibold text-red-800 mb-2">Utara</h4>
                                <p class="text-red-700 text-sm">Nagari Tanjung Balik</p>
                            </div>
                            <div class="text-center p-4 bg-blue-50 rounded-lg">
                                <h4 class="font-semibold text-blue-800 mb-2">Selatan</h4>
                                <p class="text-blue-700 text-sm">Nagari Sijunjung</p>
                            </div>
                            <div class="text-center p-4 bg-green-50 rounded-lg">
                                <h4 class="font-semibold text-green-800 mb-2">Barat</h4>
                                <p class="text-green-700 text-sm">Nagari Lubuk Tarok</p>
                            </div>
                            <div class="text-center p-4 bg-yellow-50 rounded-lg">
                                <h4 class="font-semibold text-yellow-800 mb-2">Timur</h4>
                                <p class="text-yellow-700 text-sm">Nagari Koto Baru</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Peta Interaktif -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-2xl font-bold text-gray-900">Peta Interaktif</h2>
                    <p class="text-gray-600 mt-2">Jelajahi lokasi Nagari Pematang Panjang dan sekitarnya</p>
                </div>
                <div class="relative">
                    <div id="map" class="w-full h-96 bg-gray-100">
                        <!-- Peta akan dimuat di sini -->
                    </div>
                    <div id="map-loading" class="absolute inset-0 flex items-center justify-center bg-gray-100">
                        <div class="text-center">
                            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-green-600 mx-auto mb-4"></div>
                            <p class="text-gray-600">Memuat peta...</p>
                            <p class="text-gray-500 text-sm mt-2">Peta interaktif akan ditampilkan setelah dimuat</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistik Wilayah -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Jumlah Penduduk</h3>
                    <p class="text-3xl font-bold text-blue-600">6.938</p>
                    <p class="text-gray-600 text-sm">jiwa</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Jumlah KK</h3>
                    <p class="text-3xl font-bold text-green-600">2009</p>
                    <p class="text-gray-600 text-sm">kepala keluarga</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Jumlah Jorong</h3>
                    <p class="text-3xl font-bold text-yellow-600">11</p>
                    <p class="text-gray-600 text-sm">jorong</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 8V4a1 1 0 011-1h4M4 16v4a1 1 0 001 1h4m8-16h4a1 1 0 011 1v4m-4 12h4a1 1 0 001-1v-4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Luas Wilayah</h3>
                    <p class="text-3xl font-bold text-purple-600">2.775</p>
                    <p class="text-gray-600 text-sm">HA</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk peta -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simulasi loading peta
            setTimeout(function() {
                const mapElement = document.getElementById('map');
                const loadingElement = document.getElementById('map-loading');

                // Sembunyikan loading
                loadingElement.style.display = 'none';

                // Tampilkan peta placeholder
                mapElement.innerHTML = `
            <div class="h-full flex items-center justify-center bg-gradient-to-br from-green-100 to-blue-100">
                <div class="text-center p-8">
                    <svg class="w-16 h-16 text-green-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Nagari Pematang Panjang</h3>
                    <p class="text-gray-600 mb-4">Kecamatan Sijunjung, Kabupaten Sijunjung</p>
                    <div class="bg-white rounded-lg p-4 shadow-sm">
                        <p class="text-sm text-gray-700 mb-2">
                            <strong>Koordinat:</strong> 0°43'45" LS, 101°12'30" BT
                        </p>
                        <p class="text-sm text-gray-700">
                            <strong>Luas:</strong> 45,5 km² | <strong>Penduduk:</strong> 3.250 jiwa
                        </p>
                    </div>
                    <p class="text-xs text-gray-500 mt-4">
                        * Peta interaktif akan ditampilkan setelah Google Maps API dikonfigurasi
                    </p>
                </div>
            </div>
        `;
            }, 2000);
        });

        // Contoh implementasi dengan Google Maps API (uncomment jika sudah ada API key)
        /*
            function initMap() {
                const pematangPanjang = { lat: -0.7291666, lng: 101.2083333 };

                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 14,
                    center: pematangPanjang,
                    mapTypeId: 'satellite'
                });

                const marker = new google.maps.Marker({
                    position: pematangPanjang,
                    map: map,
                    title: "Nagari Pematang Panjang"
                });

                const infoWindow = new google.maps.InfoWindow({
                    content: `
        <div style="padding: 10px;">
            <h3 style="margin: 0 0 10px 0;">Nagari Pematang Panjang</h3>
            <p style="margin: 0;">Kecamatan Sijunjung<br>Kabupaten Sijunjung<br>Sumatera Barat</p>
        </div>
    `
                });

                marker.addListener("click", () => {
                    infoWindow.open(map, marker);
                });

                document.getElementById('map-loading').style.display = 'none';
            }
            */

        // Contoh implementasi dengan Leaflet.js (alternatif gratis)

        function initLeafletMap() {
            const map = L.map('map').setView([-0.7291666, 101.2083333], 14);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            L.marker([-0.7291666, 101.2083333]).addTo(map)
                .bindPopup(`
                <div style="text-align: center;">
                    <h3>Nagari Pematang Panjang</h3>
                    <p>Kecamatan Sijunjung<br>Kabupaten Sijunjung<br>Sumatera Barat</p>
                </div>
            `)
                .openPopup();

            document.getElementById('map-loading').style.display = 'none';
        }

        // Panggil fungsi setelah library Leaflet dimuat
        initLeafletMap();
    </script>

    <!-- Uncomment salah satu script di bawah untuk menggunakan peta -->
    <!-- Google Maps API -->
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script> -->

    <!-- Leaflet.js (Gratis) -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

@endsection
