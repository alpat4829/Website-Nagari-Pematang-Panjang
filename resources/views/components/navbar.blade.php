<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                    clip-rule="evenodd" />
            </svg>
            <span><strong>Luas Wilayah:</strong> 45.2 km²</span>
        </div>
        <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
            </svg>
            <span><strong>Jumlah Penduduk:</strong> 2,847 jiwa</span>
        </div>
        <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
            </svg>
            <span><strong>Ketinggian:</strong> 350-450 mdpl</span>
        </div>
    </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Batas Wilayah</h3>
        <div class="space-y-3">
            <div><strong>Utara:</strong> Nagari Muaro Sijunjung</div>
            <div><strong>Selatan:</strong> Nagari Tanjung Gadang</div>
            <div><strong>Timur:</strong> Nagari Lubuk Tarok</div>
            <div><strong>Barat:</strong> Nagari Aie Angek</div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Koordinat Nagari Pematang Panjang
            const lat = -0.8844;
            const lng = 100.9944;

            // Initialize map
            const map = L.map('map').setView([lat, lng], 14);

            // Add tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Custom icon for nagari
            const nagariIcon = L.divIcon({
                className: 'custom-div-icon',
                html: `<div style="background-color: #16a34a; width: 20px; height: 20px; border-radius: 50%; border: 3px solid white; box-shadow: 0 2px 4px rgba(0,0,0,0.3);"></div>`,
                iconSize: [20, 20],
                iconAnchor: [10, 10]
            });

            // Add main marker
            L.marker([lat, lng], {
                    icon: nagariIcon
                }).addTo(map)
                .bindPopup(`
                    <div class="p-2">
                        <h3 class="font-bold text-green-600">Nagari Pematang Panjang</h3>
                        <p class="text-sm text-gray-600">Kecamatan Sijunjung</p>
                        <p class="text-xs mt-1">Koordinat: ${lat.toFixed(4)}°S, ${lng.toFixed(4)}°E</p>
                    </div>
                `)
                .openPopup();

            // Add some example points of interest
            const pois = [{
                    lat: -0.8834,
                    lng: 100.9934,
                    name: "Kantor Wali Nagari",
                    type: "pemerintahan"
                },
                {
                    lat: -0.8854,
                    lng: 100.9954,
                    name: "Masjid Besar",
                    type: "ibadah"
                },
                {
                    lat: -0.8824,
                    lng: 100.9924,
                    name: "Sekolah Dasar",
                    type: "pendidikan"
                },
                {
                    lat: -0.8864,
                    lng: 100.9964,
                    name: "Puskesmas",
                    type: "kesehatan"
                }
            ];

            pois.forEach(poi => {
                let color = '#10b981'; // default green
                if (poi.type === 'pemerintahan') color = '#3b82f6'; // blue
                if (poi.type === 'ibadah') color = '#8b5cf6'; // purple
                if (poi.type === 'pendidikan') color = '#f59e0b'; // yellow
                if (poi.type === 'kesehatan') color = '#ef4444'; // red

                const poiIcon = L.divIcon({
                    className: 'custom-div-icon',
                    html: `<div style="background-color: ${color}; width: 12px; height: 12px; border-radius: 50%; border: 2px solid white; box-shadow: 0 1px 2px rgba(0,0,0,0.3);"></div>`,
                    iconSize: [12, 12],
                    iconAnchor: [6, 6]
                });

                L.marker([poi.lat, poi.lng], {
                        icon: poiIcon
                    }).addTo(map)
                    .bindPopup(`
                        <div class="p-2">
                            <h4 class="font-semibold">${poi.name}</h4>
                            <p class="text-xs text-gray-600 capitalize">${poi.type}</p>
                        </div>
                    `);
            });
        });
    </script>
    </x-app-layout>

    ## 9. Admin Panel Views

    ### Admin Dashboard
    **resources/views/admin/dashboard.blade.php:**
    ```blade
    <x-app-layout>
        <x-slot name="title">Dashboard Admin - Nagari Pematang Panjang</x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-gray-900">Dashboard Admin</h1>
                    <p class="text-gray-600 mt-2">Kelola konten website Nagari Pematang Panjang</p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                                    <path fill-rule="evenodd"
                                        d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Total UMKM</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $stats['umkm_count'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Total Galeri</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $stats['gallery_count'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">Total Artikel</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $stats['article_count'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-600">UMKM Aktif</p>
                                <p class="text-2xl font-bold text-gray-900">{{ $stats['active_umkm'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Kelola UMKM</h3>
                        <p class="text-gray-600 mb-4">Tambah, edit, dan hapus data UMKM di nagari</p>
                        <div class="space-y-2">
                            <a href="{{ route('admin.umkm.create') }}"
                                class="block bg-green-600 text-white text-center py-2 px-4 rounded hover:bg-green-700 transition-colors">
                                Tambah UMKM Baru
                            </a>
                            <a href="{{ route('admin.umkm.index') }}"
                                class="block border border-green-600 text-green-600 text-center py-2 px-4 rounded hover:bg-green-50 transition-colors">
                                Lihat Semua UMKM
                            </a>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Kelola Galeri</h3>
                        <p class="text-gray-600 mb-4">Upload dan kelola foto dokumentasi kegiatan</p>
                        <div class="space-y-2">
                            <a href="{{ route('admin.gallery.create') }}"
                                class="block bg-blue-600 text-white text-center py-2 px-4 rounded hover:bg-blue-700 transition-colors">
                                Upload Foto Baru
                            </a>
                            <a href="{{ route('admin.gallery.index') }}"
                                class="block border border-blue-600 text-blue-600 text-center py-2 px-4 rounded hover:bg-blue-50 transition-colors">
                                Lihat Semua Galeri
                            </a>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Kelola Artikel</h3>
                        <p class="text-gray-600 mb-4">Tulis dan publikasikan artikel atau berita</p>
                        <div class="space-y-2">
                            <a href="{{ route('admin.articles.create') }}"
                                class="block bg-purple-600 text-white text-center py-2 px-4 rounded hover:bg-purple-700 transition-colors">
                                Tulis Artikel Baru
                            </a>
                            <a href="{{ route('admin.articles.index') }}"
                                class="block border border-purple-600 text-purple-600 text-center py-2 px-4 rounded hover:bg-purple-50 transition-colors">
                                Lihat Semua Artikel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

    ### Admin UMKM Index
    **resources/views/admin/umkm/index.blade.php:**
    ```blade
    <x-app-layout>
        <x-slot name="title">Kelola UMKM - Admin</x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Kelola UMKM</h1>
                        <p class="text-gray-600 mt-2">Manajemen data UMKM Nagari Pematang Panjang</p>
                    </div>
                    <a href="{{ route('admin.umkm.create') }}"
                        class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-colors">
                        Tambah UMKM Baru
                    </a>
                </div>

                <!-- Success Message -->
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- UMKM Table -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    @if ($umkms->count() > 0)
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        UMKM</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Kontak</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal</th>
                                    <th
                                        class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($umkms as $umkm)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                @if ($umkm->gambar)
                                                    <img class="h-12 w-12 rounded-lg object-cover"
                                                        src="{{ Storage::url($umkm->gambar) }}"
                                                        alt="{{ $umkm->nama }}">
                                                @else
                                                    <div
                                                        class="h-12 w-12 rounded-lg bg-gray-200 flex items-center justify-center">
                                                        <svg class="h-6 w-6 text-gray-400" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                @endif
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $umkm->nama }}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{ Str::limit($umkm->deskripsi, 50) }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                @if ($umkm->whatsapp)
                                                    <div class="flex items-center mb-1">
                                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.472-.149-.671.149-.198.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                                        </svg>
                                                        {{ $umkm->whatsapp }}
                                                    </div>
                                                @endif
                                                @if ($umkm->instagram)
                                                    <div class="flex items-center">
                                                        <svg class="w-4 h-4 text-pink-500 mr-2" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                                        </svg>
                                                        {{ Str::limit($umkm->instagram, 15) }}
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($umkm->is_active)
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Aktif
                                                </span>
                                            @else
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Tidak Aktif
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $umkm->created_at->format('d M Y') }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div class="flex justify-end space-x-2">
                                                <a href="{{ route('admin.umkm.show', $umkm) }}"
                                                    class="text-indigo-600 hover:text-indigo-900">Lihat</a>
                                                <a href="{{ route('admin.umkm.edit', $umkm) }}"
                                                    class="text-green-600 hover:text-green-900">Edit</a>
                                                <form action="{{ route('admin.umkm.destroy', $umkm) }}"
                                                    method="POST" class="inline"
                                                    onsubmit="return confirm('Yakin ingin menghapus UMKM ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-red-600 hover:text-red-900">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <div class="px-6 py-4">
                            {{ $umkms->links() }}
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="w-24 h-24 text-gray-300 mx-auto mb-4" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Belum Ada UMKM</h3>
                            <p class="text-gray-500 mb-6">Mulai dengan menambahkan UMKM pertama.</p>
                            <a href="{{ route('admin.umkm.create') }}"
                                class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-colors">
                                Tambah UMKM Baru
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </x-app-layout>
