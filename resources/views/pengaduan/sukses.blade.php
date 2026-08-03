{{-- resources/views/pengaduan/sukses.blade.php --}}
@extends('layouts.app')

@section('title', 'Pengaduan Berhasil Dikirim')

@section('content')
    <div class="min-h-screen bg-gray-50 flex items-center justify-center py-16 px-4">
        <div class="max-w-lg w-full">
            {{-- Success Card --}}
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden text-center">
                {{-- Top bar --}}
                <div class="bg-gradient-to-r from-green-500 to-green-600 h-2"></div>

                <div class="p-10">
                    {{-- Ikon sukses --}}
                    <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6 relative">
                        <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <div class="absolute -top-1 -right-1 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>

                    <h1 class="text-2xl font-bold text-gray-900 mb-2">Pengaduan Berhasil Dikirim!</h1>
                    <p class="text-gray-500 mb-8">
                        Terima kasih telah menyampaikan pengaduan Anda.
                        Kami akan segera menindaklanjutinya.
                    </p>

                    {{-- Nomor Tiket --}}
                    <div class="bg-orange-50 border-2 border-orange-200 border-dashed rounded-xl p-6 mb-8">
                        <p class="text-sm text-orange-600 font-medium mb-2">Nomor Tiket Pengaduan Anda</p>
                        <p class="text-3xl font-bold text-orange-700 tracking-widest font-mono">{{ $tiket }}</p>
                        <p class="text-xs text-orange-500 mt-3">
                            ⚠️ Simpan nomor tiket ini untuk memantau status pengaduan Anda
                        </p>
                    </div>

                    {{-- Timeline status --}}
                    <div class="text-left mb-8">
                        <h3 class="text-sm font-semibold text-gray-700 mb-4">Alur proses pengaduan:</h3>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Diterima</p>
                                    <p class="text-xs text-gray-500">Pengaduan Anda sudah masuk ke sistem</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 opacity-50">
                                <div class="w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Diproses</p>
                                    <p class="text-xs text-gray-500">Pengaduan sedang ditindaklanjuti</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 opacity-50">
                                <div class="w-8 h-8 bg-green-400 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Selesai</p>
                                    <p class="text-xs text-gray-500">Pengaduan telah diselesaikan</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Action buttons --}}
                    <div class="flex flex-col gap-3">
                        <a href="{{ route('pengaduan.cek', ['tiket' => $tiket]) }}"
                            class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-semibold py-3 px-6 rounded-xl transition-all duration-300 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                            Pantau Status Pengaduan
                        </a>
                        <a href="{{ route('home') }}"
                            class="w-full border border-gray-300 text-gray-600 font-medium py-3 px-6 rounded-xl hover:bg-gray-50 transition-all duration-300 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>

            <p class="text-center text-gray-400 text-xs mt-6">
                Butuh bantuan? Hubungi kantor nagari di nomor (0754) 123456
            </p>
        </div>
    </div>
@endsection
