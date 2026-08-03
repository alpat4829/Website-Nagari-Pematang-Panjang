{{-- resources/views/informasi/struktur-organisasi.blade.php --}}
@extends('layouts.app')

@section('title', 'Struktur Organisasi')

@section('content')
    <div class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Struktur Organisasi</h1>
                <p class="text-xl opacity-90">Pemerintahan Nagari Pematang Panjang</p>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Wali Nagari -->
            <div class="text-center mb-12">
                <div class="bg-white rounded-2xl shadow-lg p-8 max-w-md mx-auto">
                    <div class="w-24 h-24 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Wali Nagari</h3>
                    <p class="text-green-600 font-semibold">Mulyadi, S.Pd.</p>
                    <p class="text-gray-600 text-sm mt-2">Pemimpin tertinggi pemerintahan nagari</p>
                </div>
            </div>

            <!-- Sekretaris Nagari -->
            <div class="text-center mb-12">
                <div class="bg-white rounded-xl shadow-md p-6 max-w-sm mx-auto">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-1">Sekretaris Nagari</h4>
                    <p class="text-blue-600 font-medium">Sukri Rahmat</p>
                </div>
            </div>

            <!-- Kepala Urusan -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-center text-gray-900 mb-8">Kepala Urusan (Kaur)</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <div class="w-14 h-14 bg-yellow-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-md font-semibold text-gray-900 mb-1">Kaur Keuangan</h4>
                        <p class="text-yellow-600 font-medium text-sm">Putri Melati, SE</p>
                        <p class="text-gray-600 text-xs mt-1">Pengelolaan keuangan nagari</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <div class="w-14 h-14 bg-purple-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-md font-semibold text-gray-900 mb-1">Kaur TU & Umum</h4>
                        <p class="text-purple-600 font-medium text-sm">Retno Irmayati, ST</p>
                        <p class="text-gray-600 text-xs mt-1">Administrasi dan kepegawaian</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <div class="w-14 h-14 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-md font-semibold text-gray-900 mb-1">Kaur Perencanaan</h4>
                        <p class="text-green-600 font-medium text-sm">Lia Kurniawati</p>
                        <p class="text-gray-600 text-xs mt-1">Perencanaan pembangunan nagari</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <div class="w-14 h-14 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v6a2 2 0 002 2h2m0 0h10a2 2 0 002-2V7a2 2 0 00-2-2H9m0 0V3a2 2 0 012-2h4a2 2 0 012 2v2">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-md font-semibold text-gray-900 mb-1">Kasi Pelayanan</h4>
                        <p class="text-blue-600 font-medium text-sm">Andrean Febrizal, S.Pd</p>
                        <p class="text-gray-600 text-xs mt-1">Pelayanan masyarakat nagari</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <div class="w-14 h-14 bg-indigo-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-md font-semibold text-gray-900 mb-1">Kasi Pemerintahan</h4>
                        <p class="text-indigo-600 font-medium text-sm">Ben Elwinda</p>
                        <p class="text-gray-600 text-xs mt-1">Urusan pemerintahan nagari</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 text-center">
                        <div class="w-14 h-14 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-md font-semibold text-gray-900 mb-1">Kasi Kesejahteraan</h4>
                        <p class="text-red-600 font-medium text-sm">Yorianto, S.Pd.I</p>
                        <p class="text-gray-600 text-xs mt-1">Kesejahteraan masyarakat</p>
                    </div>
                </div>
            </div>

            <!-- Kepala Jorong -->
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-center text-gray-900 mb-8">Kepala Jorong</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-gradient-to-br from-green-50 to-green-100 border-l-4 border-green-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-green-900 mb-1">Jorong Koran</h4>
                        <p class="text-green-700 font-medium text-sm">Mustaben</p>
                    </div>
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 border-l-4 border-blue-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-blue-900 mb-1">Jorong Kambuik Koman</h4>
                        <p class="text-blue-700 font-medium text-sm">Erisman</p>
                    </div>
                    <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 border-l-4 border-yellow-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-yellow-900 mb-1">Jorong Koto Tangah</h4>
                        <p class="text-yellow-700 font-medium text-sm">Wandri Eka Putra</p>
                    </div>
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 border-l-4 border-purple-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-purple-900 mb-1">Jorong Parak Gadang</h4>
                        <p class="text-purple-700 font-medium text-sm">Fani Akbar</p>
                    </div>
                    <div class="bg-gradient-to-br from-red-50 to-red-100 border-l-4 border-red-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-red-900 mb-1">Jorong Pale</h4>
                        <p class="text-red-700 font-medium text-sm">Dulmadi</p>
                    </div>
                    <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 border-l-4 border-indigo-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-indigo-900 mb-1">Jorong Duri</h4>
                        <p class="text-indigo-700 font-medium text-sm">Endri Junaidi</p>
                    </div>
                    <div class="bg-gradient-to-br from-pink-50 to-pink-100 border-l-4 border-pink-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-pink-900 mb-1">Jorong Pondok Jago</h4>
                        <p class="text-pink-700 font-medium text-sm">Sardiman Edi</p>
                    </div>
                    <div class="bg-gradient-to-br from-teal-50 to-teal-100 border-l-4 border-teal-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-teal-900 mb-1">Jorong Kalumpang</h4>
                        <p class="text-teal-700 font-medium text-sm">Zul Abdissalam</p>
                    </div>
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 border-l-4 border-orange-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-orange-900 mb-1">Jorong Koman Kacik</h4>
                        <p class="text-orange-700 font-medium text-sm">Yusril Junaidi</p>
                    </div>
                    <div class="bg-gradient-to-br from-cyan-50 to-cyan-100 border-l-4 border-cyan-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-cyan-900 mb-1">Jorong Limau Sundai</h4>
                        <p class="text-cyan-700 font-medium text-sm">Burman Idrus</p>
                    </div>
                    <div class="bg-gradient-to-br from-lime-50 to-lime-100 border-l-4 border-lime-500 rounded-lg p-5">
                        <h4 class="text-base font-semibold text-lime-900 mb-1">Jorong Sitampung</h4>
                        <p class="text-lime-700 font-medium text-sm">Heriyanto</p>
                    </div>
                </div>
            </div>

            <!-- Lembaga Nagari -->
            <div class="bg-gray-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-center text-gray-900 mb-8">Lembaga Kemasyarakatan</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg shadow-sm p-6 text-center">
                        <div class="w-12 h-12 bg-indigo-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-1">BPN (Bamus Nagari)</h4>
                        <p class="text-indigo-600 text-sm">Badan Permusyawaratan Nagari</p>
                        <p class="text-gray-700 font-medium text-sm mt-2">Yulius</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm p-6 text-center">
                        <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-1">KAN</h4>
                        <p class="text-amber-600 text-sm">Kerapatan Adat Nagari</p>
                        <p class="text-gray-700 font-medium text-sm mt-2">J.H. Dt. PHL Garang</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm p-6 text-center">
                        <div class="w-12 h-12 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-1">LPM</h4>
                        <p class="text-teal-600 text-sm">Lembaga Pemberdayaan Masyarakat</p>
                        <p class="text-gray-700 font-medium text-sm mt-2">Irwansyah</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm p-6 text-center">
                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-1">BUMNAG</h4>
                        <p class="text-green-600 text-sm">Badan Usaha Milik Nagari</p>
                        <p class="text-gray-700 font-medium text-sm mt-2">Irwannalis</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm p-6 text-center">
                        <div class="w-12 h-12 bg-pink-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-1">PKK Nagari</h4>
                        <p class="text-pink-600 text-sm">Pemberdayaan Kesejahteraan Keluarga</p>
                        <p class="text-gray-700 font-medium text-sm mt-2">Neneng Susanti</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-sm p-6 text-center">
                        <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-1">Karang Taruna</h4>
                        <p class="text-orange-600 text-sm">Organisasi Kepemudaan</p>
                        <p class="text-gray-700 font-medium text-sm mt-2">Salman Alfarizi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
