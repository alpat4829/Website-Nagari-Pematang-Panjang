{{-- resources/views/statistik/wilayah.blade.php --}}
@extends('layouts.app')
@section('title', 'Statistik Data Wilayah')
@section('content')

<x-page-header
    title="Statistik Data Wilayah"
    subtitle="Data luas wilayah, penggunaan lahan, dan pembagian administratif Nagari Pematang Panjang"
    image="images/images/lokasistrategis.jpg"
/>

<div class="bg-gray-50 py-14">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    {{-- Stat Cards --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        @foreach ([
            ['Luas Total', '2.775 Ha', 'text-green-700', 'bg-green-50 border-green-200'],
            ['Jumlah Jorong', '11 Jorong', 'text-blue-700', 'bg-blue-50 border-blue-200'],
            ['Panjang Wilayah', '± 12 km', 'text-amber-700', 'bg-amber-50 border-amber-200'],
            ['Ketinggian Rata-rata', '420 mdpl', 'text-purple-700', 'bg-purple-50 border-purple-200'],
        ] as [$label, $val, $text, $bg])
            <div class="{{ $bg }} border rounded-2xl p-5 text-center">
                <p class="text-xs text-gray-400 mb-1">{{ $label }}</p>
                <p class="text-xl font-bold {{ $text }}">{{ $val }}</p>
            </div>
        @endforeach
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Tabel Penggunaan Lahan --}}
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center gap-3">
                <div class="w-1 h-6 bg-amber-500 rounded-full"></div>
                <h2 class="font-bold text-gray-800">Penggunaan Lahan</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-3 px-4 text-left text-xs font-bold text-gray-500 uppercase">Kode</th>
                            <th class="py-3 px-4 text-left text-xs font-bold text-gray-500 uppercase">Jenis Penggunaan</th>
                            <th class="py-3 px-4 text-right text-xs font-bold text-gray-500 uppercase">Luas (Ha)</th>
                            <th class="py-3 px-4 text-right text-xs font-bold text-gray-500 uppercase">%</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $lahan = [
                            ['01', 'Sawah', 850, 30.63],
                            ['02', 'Ladang / Kebun', 720, 25.95],
                            ['03', 'Perkebunan', 480, 17.30],
                            ['04', 'Hutan', 415, 14.95],
                            ['05', 'Pemukiman', 215, 7.75],
                            ['06', 'Fasilitas Umum', 60, 2.16],
                            ['07', 'Lain-lain', 35, 1.26],
                        ];
                        $total = array_sum(array_column($lahan, 2));
                        @endphp
                        @foreach ($lahan as $i => [$kode, $jenis, $luas, $persen])
                        <tr class="{{ $i % 2 === 0 ? 'bg-white' : 'bg-gray-50' }} hover:bg-amber-50 transition-colors">
                            <td class="py-3 px-4 font-mono text-gray-400 text-xs">{{ $kode }}</td>
                            <td class="py-3 px-4 font-medium text-gray-800">{{ $jenis }}</td>
                            <td class="py-3 px-4 text-right text-gray-700">{{ number_format($luas) }}</td>
                            <td class="py-3 px-4 text-right">
                                <span class="text-amber-700 font-semibold">{{ $persen }}%</span>
                            </td>
                        </tr>
                        @endforeach
                        <tr class="bg-amber-50 font-bold border-t border-amber-200">
                            <td colspan="2" class="py-3 px-4 text-gray-800">TOTAL</td>
                            <td class="py-3 px-4 text-right text-gray-800">{{ number_format($total) }}</td>
                            <td class="py-3 px-4 text-right text-amber-700">100,00%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Donut Chart --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-1 h-6 bg-amber-500 rounded-full"></div>
                <h2 class="font-bold text-gray-800">Distribusi Lahan</h2>
            </div>
            <canvas id="lahanChart" height="220"></canvas>
            <div class="mt-4 space-y-2">
                @php $colors = ['#16a34a','#2563eb','#d97706','#059669','#7c3aed','#db2777','#9ca3af']; @endphp
                @foreach ($lahan as $i => [$kode, $jenis, $luas, $persen])
                <div class="flex items-center justify-between text-xs">
                    <div class="flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full flex-shrink-0" style="background:{{ $colors[$i] }}"></span>
                        <span class="text-gray-600">{{ $jenis }}</span>
                    </div>
                    <span class="font-bold text-gray-800">{{ $persen }}%</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Tabel Jorong --}}
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mt-6">
        <div class="px-6 py-4 border-b border-gray-100 flex items-center gap-3">
            <div class="w-1 h-6 bg-green-600 rounded-full"></div>
            <h2 class="font-bold text-gray-800">Luas Wilayah per Jorong</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-gradient-to-r from-green-700 to-green-600 text-white">
                        <th class="py-3 px-4 text-left text-xs font-bold uppercase">#</th>
                        <th class="py-3 px-4 text-left text-xs font-bold uppercase">Nama Jorong</th>
                        <th class="py-3 px-4 text-right text-xs font-bold uppercase">Luas (Ha)</th>
                        <th class="py-3 px-4 text-right text-xs font-bold uppercase">% Wilayah</th>
                        <th class="py-3 px-4 text-left text-xs font-bold uppercase">Proporsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $jorongluas = [
                        ['Jorong Koran', 310], ['Jorong Kambuik Koman', 285], ['Jorong Koto Tangah', 265],
                        ['Jorong Parak Gadang', 230], ['Jorong Pale', 245], ['Jorong Duri', 220],
                        ['Jorong Pondok Jago', 290], ['Jorong Kalumpang', 275], ['Jorong Koman Kacik', 215],
                        ['Jorong Limau Sundai', 240], ['Jorong Sitampung', 200],
                    ];
                    $totalj = array_sum(array_column($jorongluas, 1));
                    @endphp
                    @foreach ($jorongluas as $i => [$nama, $luas])
                    @php $pct = round($luas / $totalj * 100, 2); @endphp
                    <tr class="{{ $i % 2 === 0 ? 'bg-white' : 'bg-gray-50' }} hover:bg-green-50 transition-colors">
                        <td class="py-3 px-4 text-gray-400 font-mono text-xs">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</td>
                        <td class="py-3 px-4 font-semibold text-gray-800">{{ $nama }}</td>
                        <td class="py-3 px-4 text-right text-gray-700">{{ number_format($luas) }}</td>
                        <td class="py-3 px-4 text-right font-semibold text-green-700">{{ $pct }}%</td>
                        <td class="py-3 px-4">
                            <div class="w-full bg-gray-100 rounded-full h-1.5">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width:{{ $pct }}%"></div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="bg-green-50 font-bold border-t border-green-200">
                        <td colspan="2" class="py-3 px-4 text-gray-800">TOTAL</td>
                        <td class="py-3 px-4 text-right">{{ number_format($totalj) }}</td>
                        <td class="py-3 px-4 text-right text-green-700">100,00%</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
new Chart(document.getElementById('lahanChart'), {
    type: 'doughnut',
    data: {
        labels: @json(array_column($lahan, 1)),
        datasets: [{ data: @json(array_column($lahan, 2)),
            backgroundColor: ['#16a34a','#2563eb','#d97706','#059669','#7c3aed','#db2777','#9ca3af'],
            borderWidth: 0, hoverOffset: 6 }]
    },
    options: { cutout: '68%', plugins: { legend: { display: false } } }
});
</script>
@endsection
