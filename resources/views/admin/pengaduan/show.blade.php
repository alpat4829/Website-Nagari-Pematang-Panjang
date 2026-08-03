{{-- resources/views/admin/pengaduan/show.blade.php --}}
@extends('layouts.admin')

@section('title', 'Detail Pengaduan')

@section('content')
    {{-- Breadcrumb --}}
    <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">
        <a href="{{ route('admin.pengaduan.index') }}" class="hover:text-green-600 transition-colors">Pengaduan</a>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
        <span class="text-gray-800 font-medium">{{ $pengaduan->nomor_tiket }}</span>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        {{-- Kolom Kiri: Detail Pengaduan --}}
        <div class="lg:col-span-2 space-y-6">

            {{-- Card Judul & Status --}}
            <div class="bg-white rounded-xl shadow p-6">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <span class="text-xs font-mono text-orange-600 bg-orange-50 px-2 py-1 rounded mb-2 inline-block">
                            {{ $pengaduan->nomor_tiket }}
                        </span>
                        <h2 class="text-xl font-bold text-gray-900">{{ $pengaduan->judul }}</h2>
                    </div>
                    <span class="px-3 py-1.5 text-sm font-semibold rounded-full {{ $pengaduan->badge_status }} flex-shrink-0 ml-4">
                        {{ $pengaduan->label_status }}
                    </span>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 py-4 border-y border-gray-100 mb-4">
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Kategori</p>
                        <p class="text-sm font-medium text-gray-800 mt-1">{{ $pengaduan->label_kategori }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Jorong</p>
                        <p class="text-sm font-medium text-gray-800 mt-1">{{ $pengaduan->alamat_jorong }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">Pelapor</p>
                        <p class="text-sm font-medium text-gray-800 mt-1">{{ $pengaduan->nama_pelapor ?? 'Anonim' }}</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-400 uppercase tracking-wide">No. HP</p>
                        <p class="text-sm font-medium text-gray-800 mt-1">
                            @if ($pengaduan->no_hp)
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $pengaduan->no_hp) }}"
                                    target="_blank" class="text-green-600 hover:underline">
                                    {{ $pengaduan->no_hp }}
                                </a>
                            @else
                                -
                            @endif
                        </p>
                    </div>
                </div>

                <div>
                    <p class="text-xs text-gray-400 uppercase tracking-wide mb-2">Isi Pengaduan</p>
                    <p class="text-sm text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $pengaduan->isi_pengaduan }}</p>
                </div>

                <p class="text-xs text-gray-400 mt-4">
                    Dikirim: {{ $pengaduan->created_at->format('d F Y, H:i') }} WIB
                    · Terakhir diperbarui: {{ $pengaduan->updated_at->format('d F Y, H:i') }} WIB
                </p>
            </div>

            {{-- Foto Bukti --}}
            @if ($pengaduan->foto)
                <div class="bg-white rounded-xl shadow p-6">
                    <h3 class="text-sm font-semibold text-gray-700 mb-3">Foto Bukti</h3>
                    <img src="{{ asset('storage/' . $pengaduan->foto) }}" alt="Foto bukti pengaduan"
                        class="w-full max-h-96 object-cover rounded-lg shadow-sm cursor-pointer hover:opacity-90 transition-opacity"
                        onclick="this.classList.toggle('max-h-96'); this.classList.toggle('max-h-none');"
                        title="Klik untuk memperbesar">
                    <p class="text-xs text-gray-400 mt-2 text-center">Klik gambar untuk memperbesar</p>
                </div>
            @endif

        </div>

        {{-- Kolom Kanan: Update Status --}}
        <div class="space-y-6">

            {{-- Form Update Status --}}
            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-sm font-semibold text-gray-700 mb-4 flex items-center gap-2">
                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    Update Status
                </h3>

                <form action="{{ route('admin.pengaduan.update', $pengaduan) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="space-y-4">
                        {{-- Status --}}
                        <div>
                            <label for="status" class="block text-xs font-medium text-gray-600 mb-1">Status Pengaduan</label>
                            <select id="status" name="status"
                                class="w-full px-3 py-2.5 text-sm rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition">
                                <option value="diterima"  {{ $pengaduan->status === 'diterima'  ? 'selected' : '' }}>🟡 Diterima</option>
                                <option value="diproses"  {{ $pengaduan->status === 'diproses'  ? 'selected' : '' }}>🔵 Diproses</option>
                                <option value="selesai"   {{ $pengaduan->status === 'selesai'   ? 'selected' : '' }}>🟢 Selesai</option>
                                <option value="ditolak"   {{ $pengaduan->status === 'ditolak'   ? 'selected' : '' }}>🔴 Ditolak</option>
                            </select>
                        </div>

                        {{-- Catatan Admin --}}
                        <div>
                            <label for="catatan_admin" class="block text-xs font-medium text-gray-600 mb-1">
                                Catatan / Respon untuk Pelapor
                                <span class="text-gray-400 font-normal">(opsional)</span>
                            </label>
                            <textarea id="catatan_admin" name="catatan_admin" rows="5"
                                placeholder="Tulis respons atau keterangan untuk pelapor di sini..."
                                class="w-full px-3 py-2.5 text-sm rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition resize-none">{{ $pengaduan->catatan_admin }}</textarea>
                            <p class="text-xs text-gray-400 mt-1">Catatan ini bisa dilihat oleh pelapor saat cek status tiket</p>
                        </div>

                        <button type="submit"
                            class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2.5 rounded-lg transition-all duration-300 flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>

            {{-- Aksi lain --}}
            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-sm font-semibold text-gray-700 mb-3">Aksi Lainnya</h3>
                <div class="space-y-2">
                    @if ($pengaduan->no_hp)
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $pengaduan->no_hp) }}"
                            target="_blank"
                            class="flex items-center gap-2 text-sm text-green-600 hover:text-green-700 bg-green-50 hover:bg-green-100 px-4 py-2.5 rounded-lg transition-colors w-full">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                            Hubungi via WhatsApp
                        </a>
                    @endif
                    <form action="{{ route('admin.pengaduan.destroy', $pengaduan) }}" method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus pengaduan ini secara permanen?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="flex items-center gap-2 text-sm text-red-600 hover:text-red-700 bg-red-50 hover:bg-red-100 px-4 py-2.5 rounded-lg transition-colors w-full">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Hapus Pengaduan
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
