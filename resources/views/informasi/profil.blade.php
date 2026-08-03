{{-- resources/views/informasi/profil.blade.php --}}
@extends('layouts.app')

@section('title', 'Profil Nagari')

@section('content')
    <div class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Profil Nagari</h1>
                <p class="text-xl opacity-90">Nagari Pematang Panjang</p>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar Navigation -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-md p-6 sticky top-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Menu Profil</h3>
                        <nav class="space-y-2">
                            <a href="#sejarah"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Sejarah
                            </a>
                            <a href="#batas-wilayah"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Batas Wilayah
                            </a>
                            <a href="#jorong"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Jorong
                            </a>
                            <a href="#kondisi-geografis"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Kondisi Geografis
                            </a>
                            <a href="#kondisi-nagari"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Kondisi Nagari
                            </a>
                            <a href="#topografi"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Topografi
                            </a>
                        </nav>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-3 space-y-12">

                    <!-- Profil Umum -->
                    <section class="bg-white rounded-lg shadow-md p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Profil Umum Nagari Pematang Panjang</h2>

                        <div class="prose max-w-none mb-8">
                            <p class="text-gray-600 leading-relaxed">
                                Nagari Pematang Panjang adalah salah satu nagari yang terletak di Kecamatan Sijunjung,
                                Kabupaten Sijunjung, Provinsi Sumatera Barat. Nagari ini memiliki keunikan tersendiri
                                dengan potensi alam yang melimpah dan masyarakat yang ramah serta berbudaya.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-green-50 p-4 rounded-lg text-center">
                                <h4 class="font-semibold text-green-800 mb-2">Luas Wilayah</h4>
                                <p class="text-green-700 text-xl font-bold">2.775 HA</p>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-lg text-center">
                                <h4 class="font-semibold text-blue-800 mb-2">Jumlah Penduduk</h4>
                                <p class="text-blue-700 text-xl font-bold">6.938 jiwa</p>
                            </div>
                            <div class="bg-yellow-50 p-4 rounded-lg text-center">
                                <h4 class="font-semibold text-yellow-800 mb-2">Jarak ke Ibukota</h4>
                                <p class="text-yellow-700 text-xl font-bold">± 15 KM</p>
                            </div>
                            <div class="bg-purple-50 p-4 rounded-lg text-center">
                                <h4 class="font-semibold text-purple-800 mb-2">Jumlah Jorong</h4>
                                <p class="text-purple-700 text-xl font-bold">11 Jorong</p>
                            </div>
                        </div>
                    </section>

                    <!-- Sejarah -->
                    <section id="sejarah" class="bg-white rounded-lg shadow-md p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Sejarah</h2>

                        <div class="bg-green-50 border-l-4 border-green-600 p-6 mb-8">
                            <p class="text-green-800 italic">
                                "Nama Pematang Panjang berasal dari kondisi geografis wilayah yang berupa dataran tinggi
                                yang memanjang, menyerupai pematang sawah yang panjang."
                            </p>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Asal Usul Nama</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Nagari Pematang Panjang mendapat namanya dari kondisi geografis wilayah yang berupa
                                    dataran tinggi yang memanjang. Kata "Pematang" dalam bahasa lokal merujuk pada tanah
                                    yang lebih tinggi dari sekitarnya, sedangkan "Panjang" menggambarkan bentuk wilayah
                                    yang memanjang dari utara ke selatan.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Periode Kerajaan Minangkabau</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Wilayah Pematang Panjang pada masa lampau merupakan bagian dari kerajaan Minangkabau.
                                    Sistem pemerintahan menggunakan adat istiadat Minangkabau dengan struktur ninik mamak,
                                    penghulu, dan datuk sebagai pemimpin masyarakat.
                                </p>
                            </div>

                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h4 class="font-semibold text-gray-900 mb-3">Timeline Penting</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li><strong>Era Kerajaan:</strong> Bagian dari Kerajaan Minangkabau</li>
                                    <li><strong>1900-1942:</strong> Masa kolonial Belanda</li>
                                    <li><strong>1945:</strong> Menjadi bagian Republik Indonesia</li>
                                    <li><strong>1979:</strong> Pembentukan sistem pemerintahan nagari modern</li>
                                    <li><strong>2001:</strong> Implementasi otonomi daerah</li>
                                    <li><strong>2010-sekarang:</strong> Era digitalisasi dan modernisasi</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Batas Wilayah -->
                    <section id="batas-wilayah" class="bg-white rounded-lg shadow-md p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Batas Wilayah</h2>

                        <p class="text-gray-600 leading-relaxed mb-8">
                            Nagari Pematang Panjang terletak di Kecamatan Sijunjung, Kabupaten Sijunjung,
                            Provinsi Sumatera Barat dengan batas-batas wilayah sebagai berikut:
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-r-lg">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-red-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-red-800">Sebelah Utara</h3>
                                </div>
                                <p class="text-red-700">Berbatasan dengan Nagari Muaro</p>
                            </div>

                            <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-blue-800">Sebelah Selatan</h3>
                                </div>
                                <p class="text-blue-700">Berbatasan dengan Nagari Lalan</p>
                            </div>

                            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-r-lg">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-green-800">Sebelah Barat</h3>
                                </div>
                                <p class="text-green-700">Berbatasan dengan Nagari Kandang Baru & Nagari Koto Tuo</p>
                            </div>

                            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded-r-lg">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-yellow-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-yellow-800">Sebelah Timur</h3>
                                </div>
                                <p class="text-yellow-700">Berbatasan dengan Nagari Sijunjung</p>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Koordinat Geografis</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Lintang Selatan</h4>
                                    <p class="text-gray-600">0°42'30" - 0°45'15" LS</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">Bujur Timur</h4>
                                    <p class="text-gray-600">101°10'20" - 101°13'45" BT</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Jorong -->
                    <section id="jorong" class="bg-white rounded-lg shadow-md p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Jorong</h2>

                        <p class="text-gray-600 leading-relaxed mb-8">
                            Nagari Pematang Panjang terdiri dari 11 (sebelas) jorong sebagai pembagian wilayah
                            administratif terkecil. Setiap jorong memiliki karakteristik dan potensi yang unik
                            serta dipimpin oleh seorang Kepala Jorong.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gradient-to-r from-green-50 to-green-100 border-l-4 border-green-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-green-900">1. Jorong Koran</h3>
                                    <p class="text-green-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-green-800 font-medium text-sm">Mustaben</span>
                            </div>
                            <div class="bg-gradient-to-r from-blue-50 to-blue-100 border-l-4 border-blue-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-blue-900">2. Jorong Kambuik Koman</h3>
                                    <p class="text-blue-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-blue-800 font-medium text-sm">Erisman</span>
                            </div>
                            <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 border-l-4 border-yellow-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-yellow-900">3. Jorong Koto Tangah</h3>
                                    <p class="text-yellow-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-yellow-800 font-medium text-sm">Wandri Eka Putra</span>
                            </div>
                            <div class="bg-gradient-to-r from-purple-50 to-purple-100 border-l-4 border-purple-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-purple-900">4. Jorong Parak Gadang</h3>
                                    <p class="text-purple-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-purple-800 font-medium text-sm">Fani Akbar</span>
                            </div>
                            <div class="bg-gradient-to-r from-red-50 to-red-100 border-l-4 border-red-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-red-900">5. Jorong Pale</h3>
                                    <p class="text-red-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-red-800 font-medium text-sm">Dulmadi</span>
                            </div>
                            <div class="bg-gradient-to-r from-indigo-50 to-indigo-100 border-l-4 border-indigo-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-indigo-900">6. Jorong Duri</h3>
                                    <p class="text-indigo-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-indigo-800 font-medium text-sm">Endri Junaidi</span>
                            </div>
                            <div class="bg-gradient-to-r from-pink-50 to-pink-100 border-l-4 border-pink-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-pink-900">7. Jorong Pondok Jago</h3>
                                    <p class="text-pink-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-pink-800 font-medium text-sm">Sardiman Edi</span>
                            </div>
                            <div class="bg-gradient-to-r from-teal-50 to-teal-100 border-l-4 border-teal-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-teal-900">8. Jorong Kalumpang</h3>
                                    <p class="text-teal-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-teal-800 font-medium text-sm">Zul Abdissalam</span>
                            </div>
                            <div class="bg-gradient-to-r from-orange-50 to-orange-100 border-l-4 border-orange-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-orange-900">9. Jorong Koman Kacik</h3>
                                    <p class="text-orange-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-orange-800 font-medium text-sm">Yusril Junaidi</span>
                            </div>
                            <div class="bg-gradient-to-r from-cyan-50 to-cyan-100 border-l-4 border-cyan-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-cyan-900">10. Jorong Limau Sundai</h3>
                                    <p class="text-cyan-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-cyan-800 font-medium text-sm">Burman Idrus</span>
                            </div>
                            <div class="bg-gradient-to-r from-lime-50 to-lime-100 border-l-4 border-lime-500 p-5 rounded-r-lg flex justify-between items-center">
                                <div>
                                    <h3 class="text-lg font-semibold text-lime-900">11. Jorong Sitampung</h3>
                                    <p class="text-lime-700 text-sm">Kepala Jorong</p>
                                </div>
                                <span class="text-lime-800 font-medium text-sm">Heriyanto</span>
                            </div>
                        </div>
                    </section>

                    <!-- Kondisi Geografis -->
                    <section id="kondisi-geografis" class="bg-white rounded-lg shadow-md p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Kondisi Geografis</h2>

                        <div class="space-y-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Ketinggian Wilayah</h3>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="bg-green-50 border border-green-200 p-4 rounded-lg text-center">
                                        <h4 class="font-semibold text-green-900 mb-2">Terendah</h4>
                                        <p class="text-2xl font-bold text-green-600">250m</p>
                                        <p class="text-green-700 text-sm">di atas permukaan laut</p>
                                    </div>
                                    <div class="bg-yellow-50 border border-yellow-200 p-4 rounded-lg text-center">
                                        <h4 class="font-semibold text-yellow-900 mb-2">Rata-rata</h4>
                                        <p class="text-2xl font-bold text-yellow-600">420m</p>
                                        <p class="text-yellow-700 text-sm">di atas permukaan laut</p>
                                    </div>
                                    <div class="bg-red-50 border border-red-200 p-4 rounded-lg text-center">
                                        <h4 class="font-semibold text-red-900 mb-2">Tertinggi</h4>
                                        <p class="text-2xl font-bold text-red-600">650m</p>
                                        <p class="text-red-700 text-sm">di atas permukaan laut</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Iklim dan Cuaca</h3>
                                <div class="bg-gray-50 p-6 rounded-lg">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h4 class="font-semibold text-gray-900 mb-3">Tipe Iklim</h4>
                                            <p class="text-gray-600 mb-4">Iklim tropis dengan dua musim utama</p>
                                            <ul class="text-gray-600 space-y-2">
                                                <li class="flex items-center">
                                                    <svg class="w-4 h-4 text-blue-500 mr-2" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                                                        </path>
                                                    </svg>
                                                    Musim Hujan: Oktober - Maret
                                                </li>
                                                <li class="flex items-center">
                                                    <svg class="w-4 h-4 text-yellow-500 mr-2" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                                                        </path>
                                                    </svg>
                                                    Musim Kemarau: April - September
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 mb-3">Curah Hujan</h4>
                                            <div class="space-y-3">
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span class="text-sm text-gray-600">Curah Hujan Tahunan</span>
                                                        <span class="text-sm font-medium text-gray-900">2.800mm</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 85%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Kondisi Nagari -->
                    <section id="kondisi-nagari" class="bg-white rounded-lg shadow-md p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Kondisi Nagari</h2>

                        <div class="space-y-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Fasilitas Umum</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <div class="bg-blue-50 p-4 rounded-lg text-center">
                                        <svg class="w-8 h-8 text-blue-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5">
                                            </path>
                                        </svg>
                                        <h4 class="font-semibold text-blue-900">Kantor Wali Nagari</h4>
                                    </div>
                                    <div class="bg-green-50 p-4 rounded-lg text-center">
                                        <svg class="w-8 h-8 text-green-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                            </path>
                                        </svg>
                                        <h4 class="font-semibold text-green-900">Sekolah</h4>
                                    </div>
                                    <div class="bg-red-50 p-4 rounded-lg text-center">
                                        <svg class="w-8 h-8 text-red-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                            </path>
                                        </svg>
                                        <h4 class="font-semibold text-red-900">Puskesmas</h4>
                                    </div>
                                    <div class="bg-purple-50 p-4 rounded-lg text-center">
                                        <svg class="w-8 h-8 text-purple-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                        </svg>
                                        <h4 class="font-semibold text-purple-900">Masjid</h4>
                                    </div>
                                    <div class="bg-yellow-50 p-4 rounded-lg text-center">
                                        <svg class="w-8 h-8 text-yellow-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M8 11v6h8v-6M8 11H6a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2v-6a2 2 0 00-2-2h-2">
                                            </path>
                                        </svg>
                                        <h4 class="font-semibold text-yellow-900">Pasar</h4>
                                    </div>
                                    <div class="bg-indigo-50 p-4 rounded-lg text-center">
                                        <svg class="w-8 h-8 text-indigo-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                            </path>
                                        </svg>
                                        <h4 class="font-semibold text-indigo-900">Jalan & Jembatan</h4>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Potensi Unggulan</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="bg-green-50 p-6 rounded-lg">
                                        <h4 class="font-semibold text-green-900 mb-3">Sektor Pertanian</h4>
                                        <ul class="text-green-700 space-y-2">
                                            <li>• Padi sawah dan ladang</li>
                                            <li>• Jagung dan ubi kayu</li>
                                            <li>• Sayuran dan cabai</li>
                                            <li>• Kelapa sawit</li>
                                        </ul>
                                    </div>
                                    <div class="bg-blue-50 p-6 rounded-lg">
                                        <h4 class="font-semibold text-blue-900 mb-3">Sektor UMKM</h4>
                                        <ul class="text-blue-700 space-y-2">
                                            <li>• Kerajinan tangan</li>
                                            <li>• Makanan dan minuman</li>
                                            <li>• Industri rumah tangga</li>
                                            <li>• Perdagangan kecil</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Topografi -->
                    <section id="topografi" class="bg-white rounded-lg shadow-md p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Topografi</h2>

                        <div class="space-y-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Bentuk Wilayah</h3>
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    Nagari Pematang Panjang memiliki topografi yang bervariasi, dari dataran tinggi
                                    hingga lembah yang subur. Bentuk wilayah yang memanjang dari utara ke selatan
                                    menjadi ciri khas nagari ini.
                                </p>

                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div class="text-center p-4 bg-brown-50 rounded-lg border">
                                        <h4 class="font-semibold text-brown-800 mb-2">Dataran Tinggi</h4>
                                        <p class="text-brown-600 text-sm">40% dari total wilayah</p>
                                        <p class="text-brown-700 text-xs mt-1">Cocok untuk perkebunan</p>
                                    </div>
                                    <div class="text-center p-4 bg-green-50 rounded-lg border">
                                        <h4 class="font-semibold text-green-800 mb-2">Lembah</h4>
                                        <p class="text-green-600 text-sm">35% dari total wilayah</p>
                                        <p class="text-green-700 text-xs mt-1">Area persawahan</p>
                                    </div>
                                    <div class="text-center p-4 bg-gray-50 rounded-lg border">
                                        <h4 class="font-semibold text-gray-800 mb-2">Perbukitan</h4>
                                        <p class="text-gray-600 text-sm">25% dari total wilayah</p>
                                        <p class="text-gray-700 text-xs mt-1">Hutan dan konservasi</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Jenis Tanah</h3>
                                <div class="space-y-4">
                                    <div class="bg-yellow-50 border border-yellow-200 p-4 rounded-lg">
                                        <h4 class="font-semibold text-yellow-900 mb-2">Tanah Alluvial (60%)</h4>
                                        <p class="text-yellow-700 text-sm">
                                            Dominan di area persawahan dan perkebunan, sangat subur untuk pertanian
                                        </p>
                                    </div>
                                    <div class="bg-red-50 border border-red-200 p-4 rounded-lg">
                                        <h4 class="font-semibold text-red-900 mb-2">Tanah Latosol (25%)</h4>
                                        <p class="text-red-700 text-sm">
                                            Terdapat di daerah perbukitan, cocok untuk perkebunan karet dan kelapa sawit
                                        </p>
                                    </div>
                                    <div class="bg-gray-50 border border-gray-200 p-4 rounded-lg">
                                        <h4 class="font-semibold text-gray-900 mb-2">Tanah Podsolik (15%)</h4>
                                        <p class="text-gray-700 text-sm">
                                            Berada di lereng bukit, memerlukan pengelolaan khusus untuk pertanian
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Sumber Daya Air</h3>
                                <div class="bg-blue-50 p-6 rounded-lg">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h4 class="font-semibold text-blue-900 mb-3">Sungai</h4>
                                            <ul class="text-blue-700 space-y-1 text-sm">
                                                <li>• Sungai Pematang (sungai utama)</li>
                                                <li>• Sungai Lubuk Basung</li>
                                                <li>• Beberapa anak sungai kecil</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-blue-900 mb-3">Irigasi</h4>
                                            <ul class="text-blue-700 space-y-1 text-sm">
                                                <li>• Jaringan irigasi teknis</li>
                                                <li>• Irigasi semi teknis</li>
                                                <li>• Irigasi sederhana/tradisional</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>

    <style>
        .brown-50 {
            background-color: #fdf8f6;
        }

        .brown-600 {
            color: #92400e;
        }

        .brown-700 {
            color: #78350f;
        }

        .brown-800 {
            color: #451a03;
        }
    </style>

    <script>
        // Smooth scroll untuk navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Highlight active section in navigation
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[href^="#"]');

            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (pageYOffset >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('bg-green-50', 'text-green-600');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('bg-green-50', 'text-green-600');
                }
            });
        });
    </script>
@endsection
