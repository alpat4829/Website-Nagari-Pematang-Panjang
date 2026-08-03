{{-- resources/views/admin/pengaduan/index.blade.php --}}
@extends('layouts.admin')

@section('title', 'Manajemen Pengaduan')

@section('content')
    {{-- Header + Counter --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
        <div>
            <h2 class="text-lg font-semibold text-gray-800">Daftar Pengaduan Masuk</h2>
            <p class="text-sm text-gray-500">Total: {{ $counts['semua'] }} pengaduan</p>
        </div>
    </div>

    {{-- Tab Filter Status --}}
    <div class="flex flex-wrap gap-2 mb-6">
        @php
            $statusTabs = [
                'semua'    => ['label' => 'Semua', 'color' => 'gray'],
                'diterima' => ['label' => 'Diterima', 'color' => 'yellow'],
                'diproses' => ['label' => 'Diproses', 'color' => 'blue'],
                'selesai'  => ['label' => 'Selesai', 'color' => 'green'],
                'ditolak'  => ['label' => 'Ditolak', 'color' => 'red'],
            ];
            $activeStatus = request('status', 'semua');
        @endphp
        @foreach ($statusTabs as $key => $tab)
            <a href="{{ route('admin.pengaduan.index', ['status' => $key]) }}"
                class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium transition-colors
                    {{ $activeStatus === $key
                        ? 'bg-green-700 text-white shadow'
                        : 'bg-white text-gray-600 hover:bg-gray-50 shadow-sm border border-gray-200' }}">
                {{ $tab['label'] }}
                <span class="text-xs {{ $activeStatus === $key ? 'bg-white/30 text-white' : 'bg-gray-100 text-gray-500' }} px-2 py-0.5 rounded-full">
                    {{ $counts[$key] }}
                </span>
            </a>
        @endforeach
    </div>

    {{-- Tabel --}}
    <div class="bg-white rounded-xl shadow overflow-hidden">
        @if ($pengaduans->isEmpty())
            <div class="text-center py-16 text-gray-400">
                <svg class="w-12 h-12 mx-auto mb-3 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                </svg>
                <p class="font-medium">Tidak ada pengaduan {{ $activeStatus !== 'semua' ? 'dengan status "'.$activeStatus.'"' : '' }}</p>
            </div>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Tiket</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pelapor</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($pengaduans as $item)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-xs font-mono font-semibold text-orange-600 bg-orange-50 px-2 py-1 rounded">
                                        {{ $item->nomor_tiket }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div>
                                        <p class="text-sm font-medium text-gray-900">{{ $item->nama_pelapor ?? 'Anonim' }}</p>
                                        <p class="text-xs text-gray-500">{{ $item->alamat_jorong }}</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-xs text-gray-600 bg-gray-100 px-2 py-1 rounded-full capitalize">
                                        {{ $item->label_kategori }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 max-w-xs">
                                    <p class="text-sm text-gray-800 truncate" title="{{ $item->judul }}">{{ $item->judul }}</p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                                    {{ $item->created_at->format('d M Y') }}<br>
                                    <span class="text-gray-400">{{ $item->created_at->format('H:i') }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $item->badge_status }}">
                                        {{ $item->label_status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center gap-2">
                                    <a href="{{ route('admin.pengaduan.show', $item) }}"
                                        class="text-blue-600 hover:text-blue-800 flex items-center gap-1 text-xs bg-blue-50 hover:bg-blue-100 px-3 py-1.5 rounded-lg transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                        Detail
                                    </a>
                                    <form action="{{ route('admin.pengaduan.destroy', $item) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus pengaduan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-600 hover:text-red-800 flex items-center gap-1 text-xs bg-red-50 hover:bg-red-100 px-3 py-1.5 rounded-lg transition-colors">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            @if ($pengaduans->hasPages())
                <div class="px-6 py-4 border-t border-gray-200">
                    {{ $pengaduans->appends(request()->query())->links() }}
                </div>
            @endif
        @endif
    </div>
@endsection
