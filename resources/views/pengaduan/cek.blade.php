{{-- resources/views/pengaduan/cek.blade.php --}}
@extends('layouts.app')

@section('title', 'Cek Status Pengaduan')

@section('content')
    <div class="bg-gradient-to-r from-orange-500 to-orange-700 text-white py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold mb-3">Cek Status <span class="text-yellow-300">Pengaduan</span></h1>
            <p class="text-orange-100 text-lg">Masukkan nomor tiket untuk memantau perkembangan pengaduan Anda</p>
        </div>
    </div>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Form Cek Tiket --}}
            <div class="bg-white rounded-2xl shadow-md p-8 mb-8">
                <form action="{{ route('pengaduan.cek') }}" method="GET" class="flex gap-3">
                    <div class="flex-1">
                        <input type="text" name="tiket"
                            value="{{ request('tiket') }}"
                            placeholder="Contoh: PP-2025-0001"
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-400 focus:border-orange-400 outline-none transition text-sm font-mono uppercase"
                            style="text-transform: uppercase;">
                    </div>
                    <button type="submit"
                        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300 flex items-center gap-2 whitespace-nowrap">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        Cek Status
                    </button>
                </form>
            </div>

            {{-- Error message --}}
            @if ($error)
                <div class="bg-red-50 border border-red-200 rounded-xl p-5 mb-6 flex items-start gap-3">
                    <svg class="w-5 h-5 text-red-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-red-700 text-sm">{{ $error }}</p>
                </div>
            @endif

            {{-- Hasil pencarian --}}
            @if ($pengaduan)
                <div class="bg-white rounded-2xl shadow-md overflow-hidden">
                    {{-- Status header --}}
                    <div class="@if($pengaduan->status === 'selesai') bg-green-500 @elseif($pengaduan->status === 'diproses') bg-blue-500 @elseif($pengaduan->status === 'ditolak') bg-red-500 @else bg-yellow-500 @endif p-5">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-white/80 text-sm">Nomor Tiket</p>
                                <p class="text-white font-bold text-xl font-mono">{{ $pengaduan->nomor_tiket }}</p>
                            </div>
                            <span class="bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold">
                                {{ $pengaduan->label_status }}
                            </span>
                        </div>
                    </div>

                    <div class="p-6 space-y-5">
                        {{-- Info grid --}}
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wide">Kategori</p>
                                <p class="text-sm font-medium text-gray-800 mt-1">{{ $pengaduan->label_kategori }}</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wide">Tanggal Masuk</p>
                                <p class="text-sm font-medium text-gray-800 mt-1">{{ $pengaduan->created_at->format('d M Y, H:i') }}</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wide">Pelapor</p>
                                <p class="text-sm font-medium text-gray-800 mt-1">{{ $pengaduan->nama_pelapor ?? 'Anonim' }}</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wide">Jorong</p>
                                <p class="text-sm font-medium text-gray-800 mt-1">{{ $pengaduan->alamat_jorong }}</p>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 pt-4">
                            <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Judul Pengaduan</p>
                            <p class="text-base font-semibold text-gray-800">{{ $pengaduan->judul }}</p>
                        </div>

                        <div>
                            <p class="text-xs text-gray-400 uppercase tracking-wide mb-1">Isi Pengaduan</p>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ $pengaduan->isi_pengaduan }}</p>
                        </div>

                        {{-- Foto bukti --}}
                        @if ($pengaduan->foto)
                            <div>
                                <p class="text-xs text-gray-400 uppercase tracking-wide mb-2">Foto Bukti</p>
                                <img src="{{ asset('storage/' . $pengaduan->foto) }}" alt="Foto bukti pengaduan"
                                    class="w-full max-h-64 object-cover rounded-xl shadow-sm">
                            </div>
                        @endif

                        {{-- Catatan Admin --}}
                        @if ($pengaduan->catatan_admin)
                            <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                                <div class="flex items-center gap-2 mb-2">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                    </svg>
                                    <p class="text-xs font-semibold text-blue-700">Respon dari Nagari</p>
                                </div>
                                <p class="text-sm text-blue-700">{{ $pengaduan->catatan_admin }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @elseif (request()->has('tiket') && !$error)
                {{-- State kosong --}}
            @else
                {{-- Petunjuk awal --}}
                <div class="text-center py-12 text-gray-400">
                    <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    <p class="font-medium text-gray-500 mb-1">Masukkan nomor tiket pengaduan Anda</p>
                    <p class="text-sm">Nomor tiket diberikan saat pengaduan berhasil dikirim</p>
                    <a href="{{ route('pengaduan.index') }}" class="inline-block mt-5 text-orange-500 hover:text-orange-600 text-sm font-medium">
                        Belum punya tiket? Buat pengaduan baru →
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
