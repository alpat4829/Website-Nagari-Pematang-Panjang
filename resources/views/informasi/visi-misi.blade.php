{{-- resources/views/informasi/visi-misi.blade.php --}}
@extends('layouts.app')

@section('title', 'Visi Misi')

@section('content')
    <div class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Visi & Misi</h1>
                <p class="text-xl opacity-90">Arah dan Tujuan Pembangunan Nagari Pematang Panjang</p>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Visi Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">VISI</h2>
                    <div class="w-24 h-1 bg-green-600 mx-auto"></div>
                </div>

                <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-2xl p-8 md:p-12 shadow-lg">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </div>
                        <blockquote class="text-2xl md:text-3xl font-bold text-green-900 leading-relaxed">
                            "Terwujudnya Nagari Pematang Panjang Yang Maju, Mandiri, Sejahtera, dan Berbudaya Berdasarkan
                            Nilai-Nilai Islami dan Adat Minangkabau"
                        </blockquote>
                    </div>
                </div>
            </div>

            <!-- Misi Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">MISI</h2>
                    <div class="w-24 h-1 bg-green-600 mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-green-600 font-bold text-xl">1</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Pembangunan Infrastruktur</h3>
                                <p class="text-gray-600">
                                    Meningkatkan kualitas infrastruktur dasar seperti jalan, jembatan, irigasi,
                                    dan fasilitas umum untuk mendukung aktivitas masyarakat dan perekonomian nagari.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-blue-600 font-bold text-xl">2</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Pengembangan Ekonomi</h3>
                                <p class="text-gray-600">
                                    Mengembangkan potensi ekonomi masyarakat melalui pemberdayaan UMKM,
                                    koperasi, dan sektor pertanian untuk meningkatkan kesejahteraan rakyat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-yellow-600 font-bold text-xl">3</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Peningkatan SDM</h3>
                                <p class="text-gray-600">
                                    Meningkatkan kualitas sumber daya manusia melalui pendidikan, pelatihan,
                                    dan pembinaan untuk menciptakan generasi yang cerdas dan kompetitif.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-purple-600 font-bold text-xl">4</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Pelestarian Budaya</h3>
                                <p class="text-gray-600">
                                    Melestarikan dan mengembangkan nilai-nilai budaya adat Minangkabau
                                    serta tradisi keagamaan sebagai identitas dan jati diri masyarakat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-red-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-red-600 font-bold text-xl">5</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Tata Kelola Pemerintahan</h3>
                                <p class="text-gray-600">
                                    Mewujudkan tata kelola pemerintahan yang baik, bersih, dan transparan
                                    dengan melibatkan partisipasi aktif masyarakat dalam pembangunan nagari.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-indigo-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-indigo-600 font-bold text-xl">6</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Lingkungan Hidup</h3>
                                <p class="text-gray-600">
                                    Menjaga kelestarian lingkungan hidup dan sumber daya alam untuk
                                    keberlanjutan generasi mendatang melalui program-program ramah lingkungan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Strategi Pencapaian -->
            <div class="bg-gray-50 rounded-2xl p-8 md:p-12">
                <div class="text-center mb-8">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Strategi Pencapaian</h3>
                    <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Partisipatif</h4>
                        <p class="text-gray-600 text-sm">
                            Melibatkan seluruh elemen masyarakat dalam perencanaan dan pelaksanaan pembangunan
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Berkelanjutan</h4>
                        <p class="text-gray-600 text-sm">
                            Pembangunan yang memperhatikan aspek sosial, ekonomi, dan lingkungan
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Inovatif</h4>
                        <p class="text-gray-600 text-sm">
                            Menggunakan pendekatan dan teknologi modern untuk efektivitas program
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
