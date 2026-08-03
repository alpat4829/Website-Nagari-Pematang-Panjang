{{-- resources/views/admin/umkm/index.blade.php --}}
@extends('layouts.admin')

@section('title', 'Kelola UMKM')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-gray-900">Daftar UMKM</h2>
        <a href="{{ route('admin.umkm.create') }}"
            class="bg-green-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-green-700 transition-colors">
            Tambah UMKM
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama UMKM
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kontak
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($umkms as $umkm)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    @if ($umkm->gambar)
                                        <img class="h-10 w-10 rounded-full object-cover mr-4"
                                            src="{{ Storage::url($umkm->gambar) }}" alt="{{ $umkm->nama }}">
                                    @else
                                        <div
                                            class="h-10 w-10 rounded-full bg-gray-300 mr-4 flex items-center justify-center">
                                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16"></path>
                                            </svg>
                                        </div>
                                    @endif
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $umkm->nama }}</div>
                                        <div class="text-sm text-gray-500">{{ Str::limit($umkm->deskripsi, 50) }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($umkm->is_active)
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Aktif</span>
                                @else
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Tidak
                                        Aktif</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <div class="flex space-x-2">
                                    @if ($umkm->whatsapp)
                                        <span class="text-green-600 text-xs bg-green-100 px-2 py-1 rounded">WA</span>
                                    @endif
                                    @if ($umkm->instagram)
                                        <span class="text-pink-600 text-xs bg-pink-100 px-2 py-1 rounded">IG</span>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $umkm->created_at->format('d M Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.umkm.show', $umkm) }}"
                                        class="text-indigo-600 hover:text-indigo-900">Lihat</a>
                                    <a href="{{ route('admin.umkm.edit', $umkm) }}"
                                        class="text-green-600 hover:text-green-900">Edit</a>
                                    <form action="{{ route('admin.umkm.destroy', $umkm) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900"
                                            onclick="return confirm('Yakin ingin menghapus?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16"></path>
                                </svg>
                                <p class="text-lg font-medium">Belum ada data UMKM</p>
                                <p class="text-sm">Mulai dengan menambahkan UMKM pertama</p>
                                <a href="{{ route('admin.umkm.create') }}"
                                    class="mt-4 inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Tambah UMKM
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($umkms->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $umkms->links() }}
            </div>
        @endif
    </div>
@endsection
